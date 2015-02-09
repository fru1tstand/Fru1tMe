<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::SQL();

/**
 * Fru1tme specific settings and constants
 */
class Settings {
	const SESSION_NAME = "fru1tme-website-thing-whatever";
	const SETTINGS_SQL_TABLE_NAME = "global_settings";
	const QUERY_SELECT_SINGLE_VALUE = "SELECT `value` FROM global_settings WHERE `key` = ?";
	const QUERY_SELECT_MULTIPLE_VALUE = "SELECT `key`, `value` FROM global_settings WHERE `key` IN ";
	
	const DB_KEY_FACEBOOK_LOGIN_APP_ID = "facebook-login-appid";
	const DB_KEY_FACEBOOK_LOGIN_APP_SECRET = "facebook-login-secret";
	
	const SESSION_KEY_FACEBOOK_SESSION = "facebook-session";
	
	/**
	 * Gets the value of the passed key from the database or false if 
	 * @param string $key
	 * @return boolean|unknown
	 */
	public static function getFromDatabase($key) {
		return SQL::createQueryBuilder()
				->withQuery(self::QUERY_SELECT_SINGLE_VALUE)
				->withParam($key, 's')
				->build()
				->forEachResult(function($row) {
					return $row['value'];
				});
	}
	
	/**
	 * Gets the values of the passed keys from the database. Returns an array keyed
	 * by the passed keys. If a key wasn't found, the function returns null for that
	 * key only.
	 * @param array $keys
	 * @throws InvalidArgumentException Thrown when no keys are passed
	 * @return array
	 */
	public static function getMultipleFromDatabase(array $keys) {
		if (count($keys) < 1)
			throw new InvalidArgumentException("Must pass at least 1 key");
		
		$result = array();
		for ($i = 0; $i < count($keys); $i++) {
			$result[$keys[$i]] = null;
			$keys[$i] = "'" . SQL::getConnection()->real_escape_string($keys[$i]) . "'";
		}
		
		SQL::createQueryBuilder()
				->withQuery(self::QUERY_SELECT_MULTIPLE_VALUE . "(" . implode(",", $keys) . ")")
				->build()
				->forEachResult(function($row) use (&$result) {
					$result[$row['key']] = $row['value'];
				});
		return $result;
	}
	
}

?>