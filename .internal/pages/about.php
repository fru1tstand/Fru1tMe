<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.internal/php/import.php';
import::APIHandlers();
?>
<div class="backgrounded spaced">
	<div class="container">
		<div class="spacer page"></div>
		<h1 class="page-title">
			About
			<span class="accent">/usr/kodlee</span>
			&amp;
			<span class="accent">/www/fru1tme</span>
		</h1>
		<p>
			What? I need to write a description for this too??
			I don't know, I was never good at writing stuff.
		</p>
		<div class="spacer menu"></div>
		<ul class="menu">
			<li><a href="#">Resume</a></li>
			<li><a href="#">Site Changelog</a></li>
		</ul>
		<div class="spacer page"></div>
	</div>
	
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
			<dt>Jan 18th, 2014</dt>
			<dd>Something about this site changed</dd>
		</dl>
		<?php 
		$api = new GithubRepoCommitsAPI();
		$val = print_r($api->getCommits(), true);
		
		?>
	</div>
</div>