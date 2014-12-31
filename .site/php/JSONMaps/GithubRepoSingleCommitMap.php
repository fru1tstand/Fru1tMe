<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::JSONMap();

class GithubRepoSingleCommitMap extends JsonMap {
	const SHA = "sha";
	const LINES_ADDED = "linesAdded";
	const LINES_DELETED = "linesDeleted";
	const LINES_DELTA = "linesDelta";
	const RAW_FILES = "rawFiles";
	
	protected function getMap() {
		return array(
				self::SHA => array('sha'),
				self::LINES_ADDED => array('stats', 'additions'),
				self::LINES_DELETED => array('stats', 'deletions'),
				self::LINES_DELTA => array('stats', 'total'),
				self::RAW_FILES => array('files')
		);
	}
	
	public function __construct($o) {
		parent::__construct($o);
	}
	
	private $cachedFiles;
	public function getFiles() {
		//Check if files are already create and cached
		if ($this->cachedFiles != null 
				&& is_array($this->cachedFiles) 
				&& count($this->cachedFiles) > 0)
			return $this->cachedFiles;
		
		//Check if raw files are ready to go
		$rawFilesArray = $this->get(self::RAW_FILES);
		if (!is_array($rawFilesArray))
			throw new UnexpectedValueException("Files failed to load for this commit");
		
		//Work the magics
		$tCachedFiles = array();
		foreach ($rawFilesArray as $file)
			$tCachedFiles[] = new GithubRepoSingleCommitFileMap($file);
		
		$cachedFiles = $tCachedFiles;
		return $cachedFiles;
	}
}

class GithubRepoSingleCommitFileMap extends JsonMap {
	const SHA = "sha";
	const FILENAME = "filename";
	const STATUS = "status";
	const LINES_ADDED = "linesAdded";
	const LINES_DELETED = "linesDeleted";
	const LINES_DELTA = "linesDelta";
	const PATCH = "patch";
	
	protected function getMap() {
		return array(
				self::SHA => array('sha'),
				self::FILENAME => array('filename'),
				self::STATUS => array('status'),
				self::LINES_ADDED => array('additions'),
				self::LINES_DELETED => array('deletions'),
				self::LINES_DELTA => array('changes'),
				self::PATCH => array('patch')
		);
	}
	
	public function __construct($o) {
		parent::__construct($o);
	}
	
	public function getStatusClass() {
		switch ($this->get(self::STATUS)) {
			case 'modified':
				return 'changed';
			case 'removed':
				return 'deleted';
			default:
				return 'added';
		}
	}
}

?>