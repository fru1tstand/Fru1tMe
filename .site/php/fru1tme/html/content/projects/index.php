<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="projects nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Projects</h1>
			<p>Things I've worked on, or am working on.</p>
		</div>
	</div>

	<fieldset><legend>Active</legend></fieldset>
	<div class="container">
		<p class="comment">Things under development or up-to-date</p>
	</div>
	<div class="container nopadding">
		<div class="card">
			<div class="title">DictionaryWorm</div>
			<div class="subtitle">
				<div class="platforms">Web, Mobile App</div>
				<div class="status">WiP</div>
			</div>
			<div class="list">
				<ul>
					<li>Match letters to make words. Track game play statistics, and
						challenge yourself to grow.</li>
				</ul>
			</div>
		</div>
		<div class="card-list inline">
			<a href="/projects/dictionary-worm">Read more <i class="fa fa-list"></i></a>
			<a href="https://github.com/fru1tstand/DictionaryWorm" target="_blank">Source <i class="fa fa-github"></i></a>
		</div>

		<div class="card">
			<div class="title">Fru1tMe</div>
			<div class="subtitle">
				<div class="platforms">Web (Mobile Friendly)</div>
				<div class="status">Up-to-date</div>
			</div>
			<div class="list">
				<ul>
					<li>A website full of random stuff some guy in Washington (state) decides to
						put on the internet.</li>
				</ul>
			</div>
		</div>
		<div class="card-list inline">
			<a href="/projects/fru1t-me">Read more <i class="fa fa-list"></i></a>
			<a href="https://github.com/fru1tstand/Fru1tMe" target="_blank">Source <i class="fa fa-github"></i></a>
		</div>
	</div>

	<fieldset><legend>Legacy</legend></fieldset>
	<div class="container">
		<p class="comment">Little and (may be) Broken. But still good. Yeah. Still good.</p>
	</div>
	<div class="container nopadding">
		<div class="card">
			<div class="title">Stak</div>
			<div class="subtitle">
				<div class="platforms">Web (Desktop Only)</div>
				<div class="status">On-hold</div>
			</div>
			<div class="list">
				<ul>
					<li>"Stack" The task organizer.</li>
				</ul>
			</div>
		</div>
		<div class="card-list inline">
			<a href="http://stak.fru1t.me/" target="_blank">Prototype <i class="fa fa-paper-plane"></i></a>
			<a href="/projects/stak">Read more <i class="fa fa-list"></i></a>
			<a href="https://github.com/fru1tstand/Fru1tMe-Stak" target="_blank">Source <i class="fa fa-github"></i></a>
		</div>

		<div class="card">
			<div class="title">Info 200 Poster Project</div>
			<div class="subtitle">
				<div class="platforms">Web (Mobile Friendly)</div>
				<div class="status">Complete</div>
			</div>
			<div class="list">
				<ul>
					<li>Intellectual foundations' final poster project prototype.</li>
				</ul>
			</div>
		</div>
		<div class="card-list inline">
			<a href="http://info.fru1t.me/" target="_blank">Site <i class="fa fa-globe"></i></a>
			<a href="/projects/i200-poster-project">Read more <i class="fa fa-list"></i></a>
			<a href="https://github.com/fru1tstand/Info200-Poster-Project" target="_blank">Source <i class="fa fa-github"></i></a>
		</div>

		<div class="card">
			<div class="title">KodleeShare: MIDI</div>
			<div class="subtitle">
				<div class="platforms">Web (Desktop Only), Video</div>
				<div class="status">Complete</div>
			</div>
			<div class="list">
				<ul>
					<li>Free MIDI music for all.</li>
				</ul>
			</div>
		</div>
		<div class="card-list inline">
			<a href="http://midi.fru1t.me/" target="_blank">Site <i class="fa fa-globe"></i></a>
			<a href="/projects/kshare-midi">Read more <i class="fa fa-list"></i></a>
		</div>
	</div>

	<fieldset><legend>Retired</legend></fieldset>
	<div class="container">
		<p class="comment">Offline or otherwise scrapped projects</p>
	</div>
	<div class="container nopadding">
		<div class="card">
			<div class="title">Powerbot Scripting</div>
			<div class="subtitle">
				<div class="platforms">Java, Videogames</div>
				<div class="status">Retired</div>
			</div>
			<div class="list">
				<ul>
					<li>The game that never dies.</li>
				</ul>
			</div>
		</div>
		<div class="card-list inline">
			<a href="/projects/powerbot">Read more <i class="fa fa-list"></i></a>
			<a href="https://github.com/fru1tstand/Powerbot" target="_blank">Source (newer) <i class="fa fa-github"></i></a>
			<a href="https://github.com/fru1tstand/RSBot" target="_blank">Source (old) <i class="fa fa-github"></i></a>
		</div>

		<div class="card">
			<div class="title">KodleeShare: Minecraft</div>
			<div class="subtitle">
				<div class="platforms">Java, Videogames</div>
				<div class="status">Retired</div>
			</div>
			<div class="list">
				<ul>
					<li>A community of a lifetime</li>
				</ul>
			</div>
		</div>
		<div class="card-list inline">
			<a href="/projects/minecraft">Read more <i class="fa fa-list"></i></a>
		</div>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Projects Overview")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
