<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div class="container">
		<div class="page-header">
			<h1>KodleeShare: MIDI</h1>
			<p>Free MIDI music for all.</p>
		</div>
	</div>

	<div class="rolladex">
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/ks-midi-ss-0.gif" alt="KodleeShare MIDI ScreenShot 1" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/ks-midi-ss-1.gif" alt="KodleeShare MIDI ScreenShot 2" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/ks-midi-ss-2.gif" alt="KodleeShare MIDI ScreenShot 3" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/ks-midi-ss-3.gif" alt="KodleeShare MIDI ScreenShot 4" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/ks-midi-ss-4.gif" alt="KodleeShare MIDI ScreenShot 5" />

	</div>

	<fieldset><legend>Meta</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">Status</div>
				<div class="subtitle">Complete</div>
			</li>
			<li>
				<div class="title">Platforms</div>
				<div class="subtitle">Web (Desktop Only), Video</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>About</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>The very second website I created (albeit, not the first rendition of it) was this
				glory of a site. I was at the height of my interest for video editing and music,
				and I concluded that a dynamic website would be the perfect way to store everything
				and get some experience with relational databases.</li>

		</ul>
		<ul class="card-list">
			<li>
				<div class="title">Search Features</div>
				<div>Don't even ask how this is implemented. But it works (sorta). Playing around
					with weights, full-text search, and other things that shouldn't be done via
					relational databases.</div>
			</li>
			<li>
				<div class="title">Modern parallax design</div>
				<div>Laggy to no end, but at the time, was the coolest thing out there. Still is
					today when implemented correctly.</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>Technologies</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">HTML &amp; CSS</div>
				<div class="subtitle">Layout and design.</div>
			</li>
			<li>
				<div class="title">JavaScript + jQuery</div>
				<div class="subtitle">Animation, Parallax, and AJAX.</div>
			</li>
			<li>
				<div class="title">PHP</div>
				<div class="subtitle">Templating engine and back-end.</div>
			</li>
			<li>
				<div class="title">MySQL</div>
				<div class="subtitle">Persistent storage.</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>Links</legend></fieldset>
	<div class="container nopadding">
		<div class="card-list">
			<a href="http://kodleeshare.net/" target="_blank">Live Site <i class="fa fa-globe"></i></a>
			<a href="https://www.youtube.com/user/Fru1TStanD" target="_blank">YouTube <i class="fa fa-youtube-play"></i></a>
		</div>
		<div class="card-list">
			<a href="/projects">Back to Projects <i class="fa fa-arrow-left"></i></a>
		</div>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Project / KodleeShare: MIDI")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
