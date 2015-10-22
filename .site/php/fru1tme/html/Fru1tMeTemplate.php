<?php
namespace fru1tme\html;
use common\template\TemplateInterface;

require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/fru1tme/Setup.php';

/**
 * Class Fru1tMeTemplate
 * Defines the Fru1tMe template.
 */
class Fru1tMeTemplate implements TemplateInterface {
	const FIELD_BODY = "body";
	const FIELD_TITLE = "title";

	public static function getFields() {
		return [self::FIELD_BODY, self::FIELD_TITLE];
	}

	public static function getClass() {
		return 'fru1tme\html\Fru1tMeTemplate';
	}

	public static function getRenderContents($fields) {
		return <<<HTML
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
	<nav>
		<form>
			<!-- Static and scrolled banner -->
			<label for="nav-index" class="nav-banner">{$fields[Fru1tMeTemplate::FIELD_TITLE]}</label>
			<input type="radio"
				   class="controller"
				   name="nav-state"
				   id="nav-collapsed"
				   checked="checked" />
			<label for="nav-collapsed" class="nav-banner fixed">{$fields[Fru1tMeTemplate::FIELD_TITLE]}</label>

			<input type="radio" class="controller" name="nav-state" id="nav-index" />
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/resume">Résumé</a></li>
				<li><label for="nav-projects">Projects</label></li>
				<li><label for="nav-code">Code</label></li>
				<li><label for="nav-tools">Tools</label></li>
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


	<div id="global-content">{$fields[Fru1tMeTemplate::FIELD_BODY]}</div>

	<script src="/.site/php/Pages/_resource/global_js.php"></script>
	<script src="/.site/js/goog_analytics.js"></script>
</body>
</html>
HTML;
	}
}
