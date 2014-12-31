<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::SQL();
import::JSONMaps();

class GithubRepoSingleCommitAPI extends APIHandler {
	const GITHUB_COMMIT_DB_NAME_PREFIX = "git-fs-fru1tme-commit-";
	const GITHUB_COMMIT_URL = "https://api.github.com/repos/fru1tstand/Fru1tMe/commits/";
	const DEFAULT_EXPIRATION_TIME = -1; //A commit shouldn't change
	
	const SQL_SELECT_ALL_COMMITS = "
			SELECT
				id, name, expires, value
			FROM remote_api_calls
			WHERE name LIKE 'git-fs-fru1tme-commit-%'
			";
	
	private static $cachedCommits;
	private $commit;
	
	public function __construct($sha) {
		if (!isset(self::$cachedCommits) || is_null(self::$cachedCommits))
			self::loadCache();
		
		if (isset(self::$cachedCommits
				[self::GITHUB_COMMIT_DB_NAME_PREFIX . $sha])) {
			$tRow = self::$cachedCommits
					[self::GITHUB_COMMIT_DB_NAME_PREFIX . $sha];
			if ($this->externalConstruct(
					$tRow[self::COLUMN_ID], 
					$tRow[self::COLUMN_NAME], 
					$tRow[self::COLUMN_EXPIRATION], 
					$tRow[self::COLUMN_VALUE]))
				return;
		}
		
		parent::__construct(self::GITHUB_COMMIT_URL . $sha,
				self::GITHUB_COMMIT_DB_NAME_PREFIX . $sha,
				self::DEFAULT_EXPIRATION_TIME);
	}
	
	protected function parse($value) {
		$commitRawArray = json_decode($value, true);
		$this->commit = new GithubRepoSingleCommitMap($commitRawArray);
		return true;
	}
	
	/**
	 * Gets the single commit map
	 * @return GithubRepoSingleCommitMap
	 */
	public function getCommitMap() {
		return $this->commit;
	}
	
	/**
	 * Load the cache for current and future use
	 */
	private static function loadCache() {
		self::$cachedCommits = null;
		$sql = SQL::getConnection();
		$stmt = $sql->prepare(self::SQL_SELECT_ALL_COMMITS);
		if (!$stmt->execute()) return;
		
		$result = $stmt->get_result();
		self::$cachedCommits = array();
		while ($row = $result->fetch_assoc()) {
			self::$cachedCommits[$row[parent::COLUMN_NAME]] = $row;
		}
		
		$stmt->close();
	}
}

?>