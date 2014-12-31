<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::APIHandler();
import::JSONMaps();

class GithubRepoCommitsAPI extends APIHandler {
	const GITHUB_COMMITS_API_URL = "https://api.github.com/repos/fru1tstand/Fru1tMe/commits";
	const GITHUB_COMMITS_DB_NAME = "github-fru1tstand-fru1tme-commits";
	const DEFAULT_EXPIRATION_TIME = 3600; //Seconds [60 minutes]
	
	private $commits;
	
	public function __construct($expiration = GithubRepoCommitsAPI::DEFAULT_EXPIRATION_TIME) {
		parent::__construct(
				GithubRepoCommitsAPI::GITHUB_COMMITS_API_URL,
				GithubRepoCommitsAPI::GITHUB_COMMITS_DB_NAME,
				$expiration);
	}
	
	protected function parse($value) {
		$this->commits = array();
		$commitsRawArray = json_decode($value, true);
		foreach ($commitsRawArray as $commitsRawElement)
			$this->commits[] = new GithubRepoCommitMap($commitsRawElement);
		return true;
	}
	
	public function getCommits() {
		return $this->commits;
	}
}
?>