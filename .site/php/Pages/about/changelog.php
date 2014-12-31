<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::APIHandlers();
import::SQL();
import::Page();
?>
<div class="backgrounded">
	<div class="container">
		<div class="spacer page"></div>
		<?php page::includeNav(NAV::ABOUT); ?>
		<div class="page-title with-subnav">
			<h1>Changelog</h1>
			<p>
				Basically a
				<a href="http://git-scm.com/book/en/v2/Getting-Started-Git-Basics" target="_blank">git</a>
				dump of the entire website. Here you see my notes for each little
				section of code I played around with for a period of time. All of 
				the source code is available either by right clicking and "view source",
				or a little neater presented on 
				<a href="http://github.com/fru1tstand/Fru1tMe" target="_blank">Github</a>.
			</p>
		</div>
		
		<div class="spacer content"></div>
		<dl class="git-list">
			<?php
			try {
				$githubCommitsApi = new GithubRepoCommitsAPI();
				foreach ($githubCommitsApi->getCommits() as $commitMap) {
					$singleMap = null;
					$singleCommitApi = new GithubRepoSingleCommitAPI(
							$commitMap->get(GithubRepoCommitMap::SHA));
					$singleMap = $singleCommitApi->getCommitMap();
					echo '<dt>',
							date("F jS, Y g:ia - ", $commitMap->get(GithubRepoCommitMap::DATE)),
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
								'</div><div class="git-filename">',
								$fileMap->get(GithubRepoSingleCommitFileMap::FILENAME),
								'</div>',
								
								'<div class="git-patch">',
								number_format(strlen($fileMap->get(GithubRepoSingleCommitFileMap::PATCH))),
								'</div>',
								'<div class="git-file-status ',
								$fileMap->getStatusClass(),
								'"></div>',
								'<div class="git-linecounts" title="Lines of code ',
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
			} catch (Exception $e) {
				echo $e->getMessage();
			}
			?>
	</div>
</div>