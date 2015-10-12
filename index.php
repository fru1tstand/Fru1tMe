<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::Standard();
import::Page();

//We do this so that page scripts have an opportunity to send headers
OutputBuffering::start();

if (Page::getBodyOnlyRequest()) {
	/** @noinspection PhpIncludeInspection */
	include(Page::getPageLocation(Page::getPageRequest()));
	OutputBuffering::flush();
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fru1tMe</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600'
		  rel='stylesheet'
		  type='text/css'>
	<link href="/.site/styles/compiled/global.css" rel="stylesheet" type="text/css" />
	<script src="/.site/js/preload.js"></script>
</head>

<body>
	<div id="global-header"></div>

	<nav>
		<form>
			<!-- Static and scrolled banner -->
			<label for="nav-index" class="nav-banner"> / Home</label>
			<input type="radio"
				   class="controller"
				   name="nav-state"
				   id="nav-collapsed"
				   checked="checked" />
			<label for="nav-collapsed" class="nav-banner fixed"> / Home</label>

			<input type="radio" class="controller" name="nav-state" id="nav-index" />
			<ul>
				<li><a href="#">Home</a></li>
				<li><label for="nav-about">About</label></li>
				<li><label for="nav-projects">Projects</label></li>
				<li><label for="nav-code">Code</label></li>
				<li><label for="nav-tools">Tools</label></li>
			</ul>

			<input type="radio" class="controller" name="nav-state" id="nav-about" />
			<ul>
				<li class="nav-go-back"><label for="nav-index">About</label></li>
				<li><a href="#">Me</a></li>
				<li><a href="#">Resume</a></li>
			</ul>

			<input type="radio" class="controller" name="nav-state" id="nav-projects" />
			<ul>
				<li class="nav-go-back"><label for="nav-index">Projects</label></li>
				<li><a href="#">- Overview -</a></li>
				<li><a href="#">DictionaryWorm</a></li>
				<li><a href="#">Fru1tMe</a></li>
				<li><a href="#">Stak</a></li>
				<li><a href="#">Info 200 Poster Project</a></li>
				<li><a href="#">KodleeShare: MIDI</a></li>
				<li><a href="#">RuneScape Scripting</a></li>
				<li><a href="#">KodleeShare: Minecraft</a></li>
			</ul>

			<input type="radio" class="controller" name="nav-state" id="nav-code">
			<ul>
				<li class="nav-go-back"><label for="nav-index">Code</label></li>
			</ul>
		</form>
	</nav>


	<div id="global-content">
		<?php /** @noinspection PhpIncludeInspection */
		include(Page::getPageLocation(Page::getPageRequest())); ?>
	</div>

	<script src="/.site/php/Pages/_resource/global_js.php"></script>
	<script src="/.site/js/goog_analytics.js"></script>
</body>
</html>

<?php
OutputBuffering::flush();
?>
