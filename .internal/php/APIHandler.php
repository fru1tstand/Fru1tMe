<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.internal/php/import.php';
import::SQL();
import::APIHandlers();

/**
 * Provides a layer of abstraction between remote API calls and the MySQL cache
 */
abstract class APIHandler {
	const SQL_SELECT_API_CALL = "
			SELECT 
				id, expires, value 
			FROM remote_api_calls 
			WHERE name = ?";
	const SQL_INSERT_API_RESULT = "
			INSERT INTO remote_api_calls 
				(name, expires, value) 
			VALUES
				(?, ?, ?)
			ON DUPLICATE KEY UPDATE
				name = VALUES(name),
				expires = VALUES(expires),
				value = VALUES(value),
				id = LAST_INSERT_ID(id)";
	
	const COLUMN_ID = "id";
	const COLUMN_NAME = "name";
	const COLUMN_EXPIRATION = "expires";
	const COLUMN_VALUE = "value";
	
	const COLUMN_NAME_MAXLEN = 64;
	
	const API_FETCH_FAIL_RETRY_WAIT_TIME = 3; //seconds
	const API_FETCH_FAIL_RETRY_ATTEMPTS = 5;
	const UNIX_EPOCH_MAX_VALUE = 2147483647; //Max unix integer time

	private $id;
	private $name;
	private $expires;
	private $value;
	
	/**
	 * Creates the API handler object by first checking the MySQL database for an entry, then
	 * querying the remote API for a response and storing the result in the database.
	 * @param string $getUrl The API's GET url
	 * @param string $name The corresponding database key name
	 * @param int $expiry Time (seconds) from now that a new API call should be fresh for.
	 * leave blank or -1 for indefinite.
	 * @throws InvalidArgumentException
	 * @throws Exception
	 * @throws UnexpectedValueException
	 * @return APIHandler $this on success
	 */
	protected function __construct($getUrl, $name, $expiry = -1) {
		$this->id = -1;
		$this->name = null;
		$this->expires = -1;
		$this->value = null;
		
		if (empty($name) || strlen($name) > APIHandler::COLUMN_NAME_MAXLEN) 
			throw new InvalidArgumentException("Parameter 'name' is invalid, must be 0 to 64 characters long. Got: $name");
		if (empty($getUrl))
			throw new InvalidArgumentException("URL Cannot be empty");
		
		//Check database for entry first
		$sql = SQL::getConnection();
		$stmt = $sql->prepare(APIHandler::SQL_SELECT_API_CALL);
		$stmt->bind_param('s', $name);
		if (!$stmt->execute())
			throw new Exception("SQL statement did not execute as planned: " . $stmt->error);
		
		if ($stmt->num_rows() > 1)
			throw new UnexpectedValueException("Expected 0 or 1 result(s) back, but got " . $stmt->num_rows);
		
		//Did we come up with a result
		$result = $stmt->get_result();
		if ($result->num_rows == 1) {
			$row = $result->fetch_assoc();
			
			//Set the data if parsable
			if ($this->parse($row[APIHandler::COLUMN_VALUE])) {
				$this->id = $row[APIHandler::COLUMN_ID];
				$this->name = $name;
				$this->expires = $row[APIHandler::COLUMN_EXPIRATION];
				$this->value = $row[APIHandler::COLUMN_VALUE];
			}
			
			//Exit if data is still fresh
			if ($row[APIHandler::COLUMN_EXPIRATION] > time())
				return $this;
		}
		$stmt->close();
		
		//We must fetch 
		$fetchValue = null;
		$fetchAttempts = 0;
		while (empty($fetchValue)) {
			$fetchAttempts++;
			$ch = curl_init();
			$curlOpts = array(
				CURLOPT_URL => $getUrl,
					CURLOPT_USERAGENT => "Fru1tstand",
					CURLOPT_HEADER => false,
					CURLOPT_RETURNTRANSFER => true,
					CURLOPT_FRESH_CONNECT => true,
					CURLOPT_FORBID_REUSE => true,
					CURLOPT_TIMEOUT => 4,
					CURLOPT_USE_SSL => false,
					CURLOPT_SSL_VERIFYPEER => false
			);
			curl_setopt_array($ch, $curlOpts);
			$fetchValue = curl_exec($ch);
			curl_close($ch);
			if (empty($fetchValue)) {
				if ($fetchAttempts > 0)//APIHandler::API_FETCH_FAIL_RETRY_ATTEMPTS)
					throw new Exception("The API at " . $getUrl . " seems to be unresponsive");
				sleep(APIHandler::API_FETCH_FAIL_RETRY_WAIT_TIME);
			}
		}
		
		//Parse value and set fields
		if (!$this->parse($fetchValue))
			throw new Exception("Failed to parse API response: " . $fetchValue);
		$this->name = $name;
		$this->expires = APIHandler::UNIX_EPOCH_MAX_VALUE;
		if ($expiry > -1) $this->expires = time() + $expiry;
		$this->value = $fetchValue;
		
		//Store result in database and set id
		$stmt = $sql->prepare(APIHandler::SQL_INSERT_API_RESULT);
		$stmt->bind_param('sis', $this->name, $this->expires, $this->value);
		if (!$stmt->execute())
			throw new Exception("SQL statement did not execute as planned: " . $stmt->error);
		if ($stmt->insert_id)
			$this->id = $stmt->insert_id;
		$stmt->close();
		return $this;
	}
	
	protected abstract function parse($value);
	
	public function getId() {
		return $this->id;
	}
	public function getName() {
		return $this->name;
	}
	public function getExpiration() {
		return $this->expires;
	}
	public function getRawValue() {
		return $this->value;
	}
}
?>