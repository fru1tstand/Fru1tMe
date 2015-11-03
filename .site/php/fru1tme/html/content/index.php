<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="home parallax">

	<div class="layer--10">
		<h1>Fru1tMe</h1>
	</div>

	<div class="layer--6 bz">
		<div class="bz-java"><span style="font-size: 200%">.</span>Java</div>
	</div>
	<div class="layer--5 bz">
		<div class="bz-php">&lt;?php</div>
	</div>
	<div class="layer--4 bz">
		<div class="bz-mysql">`MySQL`</div>
		<div class="bz-mssql">[T-SQL]</div>
	</div>
	<div class="layer--3 bz">
		<div class="bz-js">JavaScript();</div>
		<div class="bz-jq">$(jQuery)</div>
	</div>
	<div class="layer--2 bz">
		<div class="bz-html">&lt;html&gt;</div>
		<div class="bz-btstrp">&quot;Bootstrap&quot;</div>
	</div>
	<div class="layer--1 bz">
		<div class="bz-css">#CSS</div>
	</div>
	<div class="layer-1 bz">
		<div class="bz-en">English</div>
	</div>
	<div class="layer-2 bz">
		<div class="bz-cs"><span style="font-size: 150%">:</span>C#</div>
		<div class="bz-asp">ASP.NET</div>
	</div>
	<div class="layer-3 bz">
		<div class="bz-python">&rarr;Python</div>
	</div>
	<div class="layer-4 bz">
		<div class="bz-cpp"><span style="font-size: 28px; vertical-align: middle; display: inline-block;">*</span>C++</div>
	</div>
	<div class="layer-5 bz">
		<div class="bz-delphi">TDelphi</div>
	</div>

	<div class="parallax-push"></div>
	<div class="horizon"></div>
	<div class="overlay">
		<div>
			<div class="container">
				<div class="home-container">
					<h3>What is this?</h3>
					<p>
						Welcome to Fru1tMe!
						This small space contains a slew of things I've dumped from my brain onto
						the internet. Feel free to look around and copy things that look neat or
						interest you. Take a peek at the
						<a href="/projects" class="inverse">projects</a> page to see things I've done.
						Or if you're more of a hands-on type of person, check out the
						<a href="/code" class="inverse">code</a> section to view quirks and other
						anomalies that I've encountered.
					</p>

					<h3>Who created it?</h3>
					<p>
						My name's Kodlee Yin. I'm a college undergraduate at the
						University of Washington in Seattle. I like to play with everything
						technology-wise, and currently have a passion for web development.
						Check out <a href="/resume" class="inverse">my résumé</a> to learn more about
						me.
					</p>

					<h3>How do I get around?</h3>
					<p>
						If you're on mobile, click that light-blue thing at the top of the page.
						Heck, you can even open it
						by <label for="nav-index" class="inverse">clicking here</label> or
						<label for="nav-index" class="inverse">here</label>. Or maybe even
						<label for="nav-index" class="inverse">here</label>. Options are always
						nice :) <br />
						Otherwise, on desktop, just click those links on the left.
					</p>
				</div>
			</div>
		</div>
	</div>

</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
	->set(Fru1tMeTemplate::FIELD_TITLE, "Home")
	->set(Fru1tMeTemplate::FIELD_BODY, $body)
	->register();
