<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.internal/php/import.php';
import::APIHandlers();
import::SQL();
import::Page();
?>
<div class="backgrounded">
	<div class="container">
		<div class="spacer page"></div>
		<h1 class="page-title">Changelog</h1>
		<p>
			My trials and triumphs, here you get to see the fruits of my 
			frustration. The source for each page is available on
			<a href="http://github.com/fru1tstand/Fru1tMe" target="_blank">
				Github</a>!
		</p>
		<div class="spacer content"></div>
		<dl class="git-list">
			<?php
			try {
				$githubCommitsApi = new GithubRepoCommitsAPI();
				foreach ($githubCommitsApi->getCommits() as $commitMap) {
					$singleCommitApi = new GithubRepoSingleCommitAPI(
							$commitMap->get(GithubRepoCommitMap::SHA));
					$singleMap = $singleCommitApi->getCommitMap();
					echo '<dt>',
							date("F jS, Y g:i - ", $commitMap->get(GithubRepoCommitMap::DATE)),
							'<a target="_blank" href="',
							$commitMap->get(GithubRepoCommitMap::COMMIT_HTML_URL),
							'">',
							$commitMap->get(GithubRepoCommitMap::SHA),
							'</a></dt>';
					echo '<dd><div class="git-commit-info"><blockquote>',
							$commitMap->get(GithubRepoCommitMap::MESSAGE),
							'</blockquote></div><div class="git-linecounts" title="Total lines of code added',
							', deleted, and changed"><span class="git-additions">',
							$singleMap->get(GithubRepoSingleCommitMap::LINES_ADDED),
							'</span><span class="git-subtractions">',
							$singleMap->get(GithubRepoSingleCommitMap::LINES_DELETED),
							'</span><span class="git-delta">',
							$singleMap->get(GithubRepoSingleCommitMap::LINES_DELTA),
							'</span></div>';
					echo '<div class="git-files">';
					foreach ($singleMap->getFiles() as $fileMap) {
						echo '<div class="git-file"><div class="sha">',
								$fileMap->get(GithubRepoSingleCommitFileMap::SHA),
								'</div><div>',
								$fileMap->get(GithubRepoSingleCommitFileMap::FILENAME),
								'</div><div class="git-file-status ',
								$fileMap->getStatusClass(),
								'"></div><div class="git-patch">',
								number_format(strlen($fileMap->get(GithubRepoSingleCommitFileMap::PATCH))),
								'</div><div class="git-linecounts" title="Lines of code ',
								'added, deleted, and changed"><span class="git-additions">',
								$fileMap->get(GithubRepoSingleCommitFileMap::LINES_ADDED),
								'</span><span class="git-subtractions">',
								$fileMap->get(GithubRepoSingleCommitFileMap::LINES_DELETED),
								'</span><span class="git-delta">',
								$fileMap->get(GithubRepoSingleCommitFileMap::LINES_DELTA),
								'</span></div></div> ';
					}
					echo '</div></dd>', "\n";
				}
				//$singleCommit = new GithubRepoSingleCommitAPI("f62f5f99b8998056c6fede80751dff0a15e1269a");
				//print_r($singleCommit);
			} catch (Exception $e) {
				echo $e->getMessage();
			}
			?>
			<dt>January 17, 2015 4:13pm - <a href="#">f62f5f99b8998056c6fede80751dff0a15e1269a</a></dt>
			<dd>
				<div class="git-commit-info">
					<blockquote>Cleaned up file structure</blockquote>
				</div>
				<div class="git-linecounts" title="Total lines of code added, deleted, and changed">
					<span class="git-additions">140</span><span class="git-subtractions">20</span><span class="git-delta">120</span>
				</div>
				
				<div class="git-file">
					<div class="sha">19e33a49270782e835a8126252d8d7f34910399b</div>
					<a href="#" class="filename">.internal/css/about.css.map</a>
					<div class="git-file-status changed"></div>
					<div class="git-patch">216</div>
					<div class="git-linecounts" title="Lines of code added, deleted, and changed to this file">
						<span class="git-additions">4</span><span class="git-subtractions">2</span><span class="git-delta">6</span>
					</div>
				</div>
				<div class="git-file">
					<a href="#" class="filename">.internal/css/about.css.map</a>
					<div class="git-file-status changed"></div>
					<div class="git-patch">216</div>
					<div class="git-linecounts" title="Lines of code added, deleted, and changed to this file">
						<span class="git-additions">4</span><span class="git-subtractions">2</span><span class="git-delta">6</span>
					</div>
				</div>
				<div class="git-file">
					<a href="#" class="filename">.internal/css/about.css.map</a>
					<div class="git-file-status changed"></div>
					<div class="git-patch">216</div>
					<div class="git-linecounts" title="Lines of code added, deleted, and changed to this file">
						<span class="git-additions">4</span><span class="git-subtractions">2</span><span class="git-delta">6</span>
					</div>
				</div>
				<div class="git-file">
					<a href="#" class="filename">.internal/css/about.css.map</a>
					<div class="git-file-status added"></div>
					<div class="git-patch">216</div>
					<div class="git-linecounts" title="Lines of code added, deleted, and changed to this file">
						<span class="git-additions">4</span><span class="git-subtractions">2</span><span class="git-delta">6</span>
					</div>
				</div>
				<div class="git-file">
					<a href="#" class="filename">.internal/css/about.css.map</a>
					<div class="git-file-status changed"></div>
					<div class="git-patch">216</div>
					<div class="git-linecounts" title="Lines of code added, deleted, and changed to this file">
						<span class="git-additions">4</span><span class="git-subtractions">2</span><span class="git-delta">6</span>
					</div>
				</div>
				<div class="git-file">
					<a href="#" class="filename">.internal/css/about.css.map</a>
					<div class="git-file-status added"></div>
					<div class="git-patch">216</div>
					<div class="git-linecounts" title="Lines of code added, deleted, and changed to this file">
						<span class="git-additions">4</span><span class="git-subtractions">2</span><span class="git-delta">6</span>
					</div>
				</div>
				<div class="git-file">
					<a href="#" class="filename">.internal/css/about.css.map</a>
					<div class="git-file-status changed"></div>
					<div class="git-patch">216</div>
					<div class="git-linecounts" title="Lines of code added, deleted, and changed to this file">
						<span class="git-additions">4</span><span class="git-subtractions">2</span><span class="git-delta">6</span>
					</div>
				</div>
				<div class="git-file">
					<a href="#" class="filename">.internal/css/about.css.map</a>
					<div class="git-file-status deleted"></div>
					<div class="git-patch">216</div>
					<div class="git-linecounts" title="Lines of code added, deleted, and changed to this file">
						<span class="git-additions">4</span><span class="git-subtractions">2</span><span class="git-delta">6</span>
					</div>
				</div>
			</dd>
		</dl>

	</div>
</div>