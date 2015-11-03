<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Visual Music Project</h1>
			<p>A modular, customizable, web-based audio spectrum analyzer.</p>
		</div>
	</div>

	<div class="rolladex">
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/vmp-ss-1.gif"
			 alt="VMP ScreenShot 1" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/vmp-ss-2.gif"
			 alt="VMP ScreenShot 2" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/vmp-ss-3.gif"
			 alt="VMP ScreenShot 3" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/vmp-ss-4.gif"
			 alt="VMP ScreenShot 4" />
	</div>

	<fieldset><legend>Meta</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">Status</div>
				<div class="subtitle">On-hold</div>
			</li>
			<li>
				<div class="title">Platforms</div>
				<div class="subtitle">Web</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>About</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>After watching some music videos with fancy audio spectrum analyzers, I got to
				thinking: "why don't we have these anymore?". I still remember the good days where
				I'd be scouring Google for plugins that changed the default Window Media Player
				effects. So, here's to the hours of entertainment brought to you by
				"Bars and Waves"</li>
		</ul>
	</div>

	<fieldset><legend>Technologies</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">HTML &amp; CSS</div>
				<div class="subtitle">Layout, design, and templating.</div>
			</li>
			<li>
				<div class="title">JavaScript + jQuery</div>
				<div class="subtitle">Animation, Web Audio Engine, Transition, Back-end.</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>Links</legend></fieldset>
	<div class="container nopadding">
		<div class="card-list">
			<a href="https://github.com/fru1tstand/ks-vmp"
			   target="_blank">GitHub <i class="fa fa-github"></i></a>
			<a href="http://vmp.fru1t.me/"
			   target="_blank">Live Site <i class="fa fa-globe"></i></a>
		</div>
		<div class="card-list">
			<a href="/projects">Back to Projects <i class="fa fa-arrow-left"></i></a>
		</div>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Project / VisualMusicProject")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
