<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.internal/php/import.php';
import::JSONMap();

class GithubRepoCommitMap extends JsonMap {
	const SHA = "sha";
	const DATE = "date";
	const MESSAGE = "message";
	const TREE_SHA = "treeSha";
	const COMMIT_API_URL = "commitApiUrl";
	const COMMIT_HTML_URL = "commitHtmlUrl";
	
	protected function getMap() {
		return array(
				self::SHA => array('sha'),
				self::DATE => array('commit', 'author', 'date'),
				self::MESSAGE => array('commit', 'message'),
				self::TREE_SHA => array('commit', 'tree', 'sha'),
				self::COMMIT_API_URL => array('url'),
				self::COMMIT_HTML_URL => array('html_url')
		);
	}
	
	public function __construct($o) {
		parent::__construct($o);
		$this->{GithubRepoCommitMap::DATE} = strtotime($this->{GithubRepoCommitMap::DATE});
	}
}

?>