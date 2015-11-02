<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Info 200 Poster Project</h1>
			<p>Intellectual foundations' final poster project prototype.</p>
		</div>
	</div>

	<div class="rolladex">
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/i200-poster-ss-1.gif" alt="Poster Project ScreenShot 1" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/i200-poster-ss-2.gif" alt="Poster Project ScreenShot 2" />
		<img src="https://s3.amazonaws.com/ks_web/fru1t.me/projects/i200-poster-ss-3.gif" alt="Poster Project ScreenShot 3" />
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
				<div class="subtitle">Web (Mobile Friendly)</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>About</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>At the end of this class's quarter, students (myself included) had to create a
				representation of a solution to a data driven issue. Instead of a poster, I opted
				to create a semi-live mockup of my group's idea. </li>
			<li>Because the informatics program is built around the interaction of people with
				technology and data, I developed the site with a very customizable interface.
				The mock includes internationalization (i18n), allowing to change the language
				between 5 different presets. The mock also allows for customization of the color
				theme, provided by Bootswatch.</li>
			<li>
				<div class="title">Why we are here</div>
				<div>Students and staff at the University of Washington often run into the issue
					of being unable to find a quiet place to study. Our goal is to bring together
					these people with quality study spaces. Be it simply a quiet place,
					a room with classmates, or a hangout spot with friends, our focus
					is to save time by figuring out how busy places are, so you don't have to.</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>Technologies</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">HTML &amp; CSS3 + SASS</div>
				<div class="subtitle">Layout, and animations + transitions.</div>
			</li>
			<li>
				<div class="title"><a href="http://getbootstrap.com/" target="_blank">Twitter Bootstrap</a></div>
				<div>Templating framework.</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>Links</legend></fieldset>
	<div class="container nopadding">
		<div class="card-list">
			<a href="https://github.com/fru1tstand/Info200-Poster-Project" target="_blank">GitHub <i class="fa fa-github"></i></a>
			<a href="http://info.fru1t.me/">Live Site <i class="fa fa-globe"></i></a>
		</div>
		<div class="card-list">
			<a href="/projects">Back to Projects <i class="fa fa-arrow-left"></i></a>
		</div>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Project / Info 200 Project Poster")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
