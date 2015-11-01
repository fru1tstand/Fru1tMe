<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Stak</h1>
			<p>"Stack". The task organizer.</p>
		</div>
	</div>

	<div class="rolladex">
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/stak-ss-1.gif" alt="Stak ScreenShot 1" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/stak-ss-2.gif" alt="Stak ScreenShot 2" />
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
				<div class="subtitle">Web (Desktop Only)</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>About</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>Stak started out as a complex bundle of ideas that stemmed from my frustration at
				current homework-management systems. A change in one assignment's due date
				cascaded issues all the way down through 30+ assignments which all needed to be
				changed individually. So Stak was conceived to fill the functionality that was
				lacking in current systems.</li>
			<li>
				<div class="title">Bulk Task Management</div>
				<div>Tired of manually modifying repeated tasks one by one? See how Stak provides
					a powerful bulk editor for recurring unique assignments.</div>
			</li>
			<li>
				<div class="title">Reminders</div>
				<div>Projects or large tasks aren't meant to be done on the day they're due. So why
					are they only shown once? Stak integrates reminders for those looming projects
					and even allows you to segment them down to more manageable bite-sized
					pieces.</div>
			</li>
			<li>
				<div class="title">100% Modular</div>
				<div>Don't like or need a feature? or two? or three? Disable them! Stak is designed
					with you in mind, providing plugins and features that matter to you, and
					allowing you to completely fit out your experience with what only YOU
					need.</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>Technologies</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">PHP & Facebook PHP API</div>
				<div class="subtitle">Back-end system and authentication.</div>
			</li>
			<li>
				<div class="title">MySQL</div>
				<div class="subtitle">Persistent storage.</div>
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
		<a href="https://github.com/fru1tstand/Fru1tMe-Stak" target="_blank">GitHub <i class="fa fa-github"></i></a>
		<a href="http://stak.fru1t.me/" target="_blank">Prototype <i class="fa fa-paper-plane"></i></a>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Projects / Stak")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
