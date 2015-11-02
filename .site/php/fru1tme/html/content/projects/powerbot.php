<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Powerbot Scripting</h1>
			<p>RuneScape: The game that never dies.</p>
		</div>
	</div>

	<div class="rolladex">
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-1.gif" alt="Powerbot ScreenShot 1" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-2.gif" alt="Powerbot ScreenShot 2" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-3.gif" alt="Powerbot ScreenShot 3" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-4.gif" alt="Powerbot ScreenShot 4" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-5.gif" alt="Powerbot ScreenShot 5" />
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
			<li>This game was where it all started. Singlehandedly jumped my interest in
				programming, and not because the game made you program. It was because I got bored
				of it. The nostalgia while making this page... oh... Brings back some really sweet
				memories.</li>
			<li>
				<div class="title">What is it?</div>
				<div>RuneScape was (still is?) a java-based MMORPG game that has an open-ended play
					style. This meant that, while players could follow and complete quests,
					others could also simply level up skills which included mining, fishing,
					cooking, etc. These tasks took a very, very, very long time to do manually,
					so a team of developers created Powerbot which supplied an API for automating
					interactions within the game. </div>
			</li>
			<li>
				<div class="title">My Contributions</div>
				<div>As a Powerbot scripter, I used their API to create sequences of actions that
					completed an ultimate task within the game. In more recent times, I did a lot
					of abstraction development for other scripters to use. I created higher
					quality, more human-like methods within my framework, so that detection
					of script usage would decrease. I also developed a very lightweight dependency
					injection framework called Slick. </div>
			</li>
		</ul>
	</div>

	<fieldset><legend>Technologies</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">Java</div>
				<div class="subtitle">Implementation. In-depth with generics and reflection.</div>
			</li>
			<li>
				<div class="title">Powerbot</div>
				<div class="subtitle">API for game hooks.</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>Links</legend></fieldset>
	<div class="container nopadding">
		<div class="card-list">
			<a href="https://github.com/fru1tstand/Powerbot" target="_blank">GitHub (newer) <i class="fa fa-github"></i></a>
			<a href="https://github.com/fru1tstand/RSBot" target="_blank">GitHub (older) <i class="fa fa-github"></i></a>
		</div>
		<div class="card-list">
			<a href="/projects">Back to Projects <i class="fa fa-arrow-left"></i></a>
		</div>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Project / Powerbot Scripting")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
