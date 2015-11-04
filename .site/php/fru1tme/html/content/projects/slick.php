<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Slick</h1>
			<p>a Simple Lightweight dependency InjeCtion frameworK</p>
		</div>
	</div>

	<fieldset><legend>Meta</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">Status</div>
				<div class="subtitle">On-Hold: Release 1</div>
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
			<li>Fresh out of an internship, I wanted to dive deeper in dependency injection, and what
			better way than implementing my own solution. I was working on Powerbot scripting at the
			time, so naturally, the development went into that.</li>
			<li>
				<div class="title">Constructor Injection</div>
				<div>This is the core concept behind Slick's implementation of DI. Instead of always
					having to type <span class="code">new Objects(with, a, lot, of,
					dependencies)</span>, it's a simple
					<span class="code">slick.get(WhatIWant.class)</span>.</div>
			</li>
			<li>
				<div class="title">Recursive Injection</div>
				<div>If a dependency is not met for a specific class, Slick will recursively attempt
					to instantiate dependent class objects, until all dependencies are met. This
					allows for very highly flexible use cases.</div>
			</li>
			<li>
				<div class="title"><span class="code">#provide</span> non-injectable types</div>
				<div>If there's an external API that you need to use, but can't be wrapped, you can
					simply <span class="code">slick.provide(api)</span> it for use by your
					dependent classes. This will store it as a singleton instance for injection
					later on.</div>
			</li>
			<li>
				<div class="title">Strong Singleton Binding</div>
				<div>Require that a class be singleton through all uses? Annotate it
					<span class="code">@Singleton</span> and that's it! Slick enforces that both
					class definition and constructor parameter be annotated to maintain code
					clarity. Alternatively, one can also simply <span class="code">#provide</span>
					the instance.</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>Technologies</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>
				<div class="title">Java</div>
				<div class="subtitle">Heavy use of generics and reflection.</div>
			</li>
		</ul>
	</div>

	<fieldset><legend>Links</legend></fieldset>
	<div class="container nopadding">
		<div class="card-list">
			<a href="/code/slick">How It's Made <i class="fa fa-file-code-o"></i></a>
			<a href="https://github.com/fru1tstand/Powerbot/blob/master/src/me/fru1t/slick/Slick.java"
			   target="_blank">GitHub <i class="fa fa-github"></i></a>
		</div>
		<div class="card-list">
			<a href="/projects">Back to Projects <i class="fa fa-arrow-left"></i></a>
		</div>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Project / SLICK")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
