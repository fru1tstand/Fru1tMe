<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::Standard();
import::Page();

//We do this so that page scripts have an opportunity to send headers
OutputBuffering::start();

if (Page::getBodyOnlyRequest()) {
	include(Page::getPageLocation(Page::getPageRequest()));
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fru1tMe</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Raleway'
		  rel='stylesheet'
		  type='text/css'>
	<link href="/.site/styles/compiled/global.css" rel="stylesheet" type="text/css" />
	<script src="/.site/js/preload.js"></script>
</head>

<body>
	<nav>
		this is the nav!
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
