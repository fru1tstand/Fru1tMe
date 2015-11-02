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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:400,600'>
	<link rel="stylesheet" href="/.site/styles/compiled/global.css" />
</head>

<body>
	<nav>
		<form>
			<!-- Static and scrolled banner -->
			<label for="nav-index" class="nav-banner">{$fields[Fru1tMeTemplate::FIELD_TITLE]}</label>
			<input type="radio" class="controller" name="nav-state" id="nav-collapsed" checked="checked" />
			<label for="nav-collapsed" class="nav-banner fixed">{$fields[Fru1tMeTemplate::FIELD_TITLE]}</label>

			<input type="radio" class="controller" name="nav-state" id="nav-index" />
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/resume">Résumé</a></li>
				<li><a href="/projects">Projects</a></li>
				<li><a href="/code">Code</a></li>
				<!--<li><label for="nav-projects">Projects</label></li>-->
				<!--<li><label for="nav-code">Code</label></li>-->
				<li class="nav-close"><label for="nav-collapsed"></label></li>
			</ul>

			<!--<input type="radio" class="controller" name="nav-state" id="nav-projects">-->
			<!--<ul>-->
				<!--<li class="nav-go-back"><label for="nav-index">Go Back | Projects</label></li>-->
				<!--<li><a href="/projects">All</a></li>-->
				<!--<li><a href="/projects#anchor-projects-active">Active</a></li>-->
				<!--<li><a href="/projects#anchor-projects-legacy">Legacy</a></li>-->
				<!--<li><a href="/projects#anchor-projects-retired">Retired</a></li>-->
				<!--<li class="nav-close"><label for="nav-collapsed"></label></li>-->
			<!--</ul>-->

			<!--<input type="radio" class="controller" name="nav-state" id="nav-code">-->
			<!--<ul>-->
				<!--<li class="nav-go-back"><label for="nav-index">Go Back | Projects</label></li>-->
				<!--<li><a href="/code">All</a></li>-->
				<!--<li><a href="/code#anchor-code-java">Java</a></li>-->
				<!--<li><a href="/code#anchor-code-web">Web</a></li>-->
				<!--<li class="nav-close"><label for="nav-collapsed"></label></li>-->
			<!--</ul>-->
		</form>
	</nav>


	<div id="global-content">{$fields[Fru1tMeTemplate::FIELD_BODY]}</div>

	<script src="/.site/js/goog_analytics.js"></script>
</body>
</html>
HTML;
	}
}
