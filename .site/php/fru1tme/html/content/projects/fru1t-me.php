<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Fru1tMe</h1>
			<p>A website full off random stuff some guy in Washington (state) decides to put on the
				internet.</p>
		</div>
	</div>

	<div class="rolladex">
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/fru1tme-ss-1.gif" alt="Fru1tMe ScreenShot 1" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/fru1tme-ss-2.gif" alt="Fru1tMe ScreenShot 2" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/fru1tme-ss-3.gif" alt="Fru1tMe ScreenShot 3" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/fru1tme-ss-4.gif" alt="Fru1tMe ScreenShot 4" />
	</div>

	<fieldset><legend>Meta</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">Status</div>
				<div class="subtitle">Up-To-Date</div>
			</li>
			<li>
				<div class="title">Platforms</div>
				<div class="subtitle">Web (Mobile Friendly)</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>About</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>Fru1t.Me is a domain name that I use to distribute my projects and whatever else
				I can cram into a website, doubling as my portfolio.</li>
			<li>Fru1t.Me provides a platform for me to mess around with whatever journey my fingers
				take me to. This domain allows me to experiment with the infinite number of web
				technologies available, whilst gaining valuable feedback to improve my skills as a
				developer.</li>
		</ul>
	</div>

	<fieldset><legend>Technologies</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">PHP</div>
				<div class="subtitle">Templating and back-end engine.</div>
			</li>
			<li>
				<div class="title">HTML &amp; CSS + SASS</div>
				<div class="subtitle">Layout and animations.</div>
			</li>
			<li>
				<div class="title">JavaScript</div>
				<div class="subtitle">AJAX and timing controls.</div>
			</li>
		</ul>
	</div>


	<fieldset><legend>Links</legend></fieldset>
	<div class="card-list">
		<a href="https://github.com/fru1tstand/Fru1tMe" target="_blank">GitHub <i class="fa fa-github"></i></a>
	</div>
	<div class="card-list">
		<a href="/projects">Back to Projects <i class="fa fa-arrow-left"></i></a>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Projects / Fru1tMe")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
