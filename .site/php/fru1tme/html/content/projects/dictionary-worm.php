<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Dictionary Worm</h1>
			<p>Match letters to make words. Track game play statistics, and challenge yourself to
				grow.</p>
		</div>
	</div>

	<div class="rolladex">
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/dictonary-worm-ss-1.png" alt="Dictionary Worm ScreenShot 1" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/dictonary-worm-ss-1.png" alt="Dictionary Worm ScreenShot 1" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/dictonary-worm-ss-1.png" alt="Dictionary Worm ScreenShot 1" />
	</div>

	<fieldset><legend>Meta</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">Status</div>
				<div class="subtitle">Work in Progress - Core concepts complete, building gameplay modes</div>
			</li>
			<li>
				<div class="title">Platforms</div>
				<div class="subtitle">Web, Mobile (All)</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>About</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>DictionaryWorm is a blast to the past game ported to all mobile devices.
				Match adjacent tiles to create words. The longer the word, the higher the
				multiplier, the more points you gain. Game modes include the classic
				"burning tiles", timed, limited moves, and zen mode. Enjoy an entertaining game,
				while flexing your diction. </li>
		</ul>
	</div>

	<fieldset><legend>Technologies</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">HTML &amp; CSS + SASS</div>
				<div class="subtitle">Layout and templating.</div>
			</li>
			<li>
				<div class="title">JavaScript</div>
				<div class="subtitle">Game logic.</div>
			</li>
			<li>
				<div class="title"><a href="http://phonegap.com/" target="_blank">PhoneGap</a></div>
				<div class="subtitle">Cross-mobile-platform app compiling.</div>
			</li>
		</ul>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Projects Overview")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
