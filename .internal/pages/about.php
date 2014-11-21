<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.internal/php/import.php';
import::Page();
?>
<div class="backgrounded">
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
		<?php Page::includeNav(NAV::ABOUT); ?>
		<div class="spacer page"></div>
	</div>
</div>