<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div class="container">
		<div class="page-header">
			<h1>KodleeShare: Minecraft</h1>
			<p>A community of a lifetime.</p>
		</div>
	</div>

	<div class="rolladex">
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-5.gif" alt="Minecraft ScreenShot 5" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-3.gif" alt="Minecraft ScreenShot 3" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-4.gif" alt="Minecraft ScreenShot 4" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-6.gif" alt="Minecraft ScreenShot 6" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-7.gif" alt="Minecraft ScreenShot 7" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-8.gif" alt="Minecraft ScreenShot 8" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-1.gif" alt="Minecraft ScreenShot 1" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/mc-ss-2.gif" alt="Minecraft ScreenShot 2" />
	</div>

	<fieldset><legend>Meta</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">Status</div>
				<div class="subtitle">Complete - Retired</div>
			</li>
			<li>
				<div class="title">Platforms</div>
				<div class="subtitle">Java</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>About</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>A sad but inevitable conclusion of what could only be described as the greatest
				ad-hoc community there existed. With my co-host Carson Beck, we climbed the highest
				mountains, ran the lowest valleys, and swam the deepest rivers. And we couldn't
				have done it without the people we met along the way. </li>
			<li>
				<div class="title">What was it?</div>
				<div>Kodleeshare's Minecraft server was a community-driven game community that
					prided itself for being dependable. With a duo team that never failed to
					deliver new content and establish a name, the community rose to be known
					as the most resilient group of gamers within the Minecraft scene. </div>
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
				<div class="subtitle">Animation and AJAX.</div>
			</li>
			<li>
				<div class="title">PHP</div>
				<div class="subtitle">Templating engine and back-end.</div>
			</li>
			<li>
				<div class="title">MySQL</div>
				<div class="subtitle">Persistent storage.</div>
			</li>
			<li>
				<div class="title">Java</div>
				<div class="subtitle">Plugin development and game code.</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>Links</legend></fieldset>
	<div class="container nopadding">
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
