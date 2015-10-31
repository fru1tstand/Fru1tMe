<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="code nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Code</h1>
			<p>Snippets or feature that are mildly interesting.</p>
		</div>
	</div>

	<div class="anchor" id="anchor-code-java"></div>
	<fieldset><legend>Java</legend></fieldset>
	<div class="container">
		<p class="comment">This one's pretty straightforward. Anything to do with Java.</p>
	</div>
	<div class="container nopadding">
		<div class="card">
			<div class="title">SLICK</div>
			<div class="subtitle">
				<div class="dates">August 2015</div>
				<div class="tags">generics, dependency injection</div>
			</div>
			<div class="list">
				<ul>
					<li>A Simple Lightweight dependency InjeCtion frameworK</li>
					<li>Learn about the wonders (and horrors) of dependency injection (DI) at the
						most elementary level.</li>
				</ul>
			</div>
		</div>
		<div class="card-list inline">
			<a href="/code/slick">Read more <i class="fa fa-list"></i></a>
			<a href="https://github.com/fru1tstand/Powerbot/blob/master/src/me/fru1t/slick/Slick.java" target="_blank">Source <i class="fa fa-github"></i></a>
		</div>
	</div>

	<div class="anchor" id="anchor-code-web"></div>
	<fieldset><legend>Web</legend></fieldset>
	<div class="container">
		<div class="comment">PHP, HTML, CSS, and JavaScript related things</div>
	</div>
	<div class="container nopadding">
		<div class="card">
			<div class="title">JS-Less Reactive HTML</div>
			<div class="subtitle">
				<div class="dates">June 2015</div>
				<div class="tags">nojs</div>
			</div>
			<div class="list">
				<ul>
					<li>Visiting some uncommon CSS selectors to produce pretty neat effects
						without JavaScript.</li>
				</ul>
			</div>
		</div>
		<div class="card-list inline">
			<a href="/code/jsless-reactive-html">Read more <i class="fa fa-list"></i></a>
		</div>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Home")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
