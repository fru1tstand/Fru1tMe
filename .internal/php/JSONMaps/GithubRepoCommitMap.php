<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.internal/php/import.php';
import::JSONMap();

class GithubRepoCommitMap extends JsonMap {
	private $sha;
	private $date;
	private $message;
	private $treeSha;
	private $commitApiUrl;
	private $commitHtmlUrl;
	
	protected function handle($rawCommit) {
		if (!isset($rawCommit['sha'], $rawCommit['commit']['author']['date'], $rawCommit['commit']['message'],
				$rawCommit['commit']['tree']['sha'], $rawCommit['url'], $rawCommit['html_url']))
			throw new InvalidArgumentException("The passed commit wasn't a valid commit!");
		$this->sha = $rawCommit['sha'];
		$this->date = strtotime($rawCommit['commit']['author']['date']);
		$this->message = $rawCommit['commit']['message'];
		$this->treeSha = $rawCommit['commit']['tree']['sha'];
		$this->commitApiUrl = $rawCommit['url'];
		$this->commitHtmlUrl = $rawCommit['html_url'];
	}
	
	public function getSha() { return $this->sha; }
	public function getDate() { return $this->date; }
	public function getMessage() { return $this->message; }
	public function getTreeSha() { return $this->treeSha; }
	public function getCommitApiUrl() { return $this->commitApiUrl; }
	public function getCommitHtmlUrl() { return $this->commitHtmlUrl; }
}

?>