<?php 
	include("/.internal/php/engine.php");
	
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
		<link href="/.internal/css/global.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<noscript>
		<div id="nojs">
			<div id="nojs_graphic">
				<div>
					<div id="nojs_plug_cord"></div>
					<div class="clearfix"></div>
					<div id="nojs_plug_head"></div>
					<div class="nojs_socket_prong"></div>
					<div class="nojs_socket_pin_spacer"></div>
					<div class="nojs_socket_prong"></div>
					<div id="nojs_socket">
						<div id="nojs_socket_pins">
							<div class="nojs_socket_pin"></div>
							<div class="nojs_socket_pin_spacer"></div>
							<div class="nojs_socket_pin"></div>
						</div>
					</div>
				</div>
			</div>
			<div id="nojs_text_push"></div>
			<div id="nojs_text">
				<div>
					<h1>See this?</h1>
					<h3>This is what you reduce my website to when you disable Javascript...</h3>
					<h3>Enable it to see why!</h3>
				</div>
			</div>
		</div>
		</noscript>
		
		<div id="global-nav">
			<div id="global-nav-toggle"></div>
			<a href="#" class="global-nav-item">Home</a>
			<a href="#" class="global-nav-item">Music</a>
			<a href="#" class="global-nav-item">Games</a>
			<a href="#" class="global-nav-item">Personal</a>
			<a href="#" class="global-nav-item">Other</a>
		</div>
		
		<?php include(Page::getPageLocation(Page::getPageRequest())); ?>
		
		<div id="background">
			<div id="global-console" class="console"></div>
		</div>
		
		<script src="/.internal/js/global.js"></script>
	</body>
</html>