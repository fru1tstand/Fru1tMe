<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="resume">
	<div class="container">
		<div class="re-title">
			<h1>Kodlee Yin</h1>
			<p><i class="k-at">l</i><i class="kshare">esh</i>.net</p>
		</div>
	</div>

	<fieldset><legend>Experience</legend></fieldset>
	<div class="card">
		<div class="title">KodleeShare / Fru1tMe</div>
		<div class="subtitle">
			<div>Web Developer</div>
			<div>Seattle, Washington</div>
			<div>2008 - Present</div>
		</div>
		<div class="list">
			<ul>
				<li>Pioneering with experimental web technologies such as Canvas, WebAudio,
					and DOMApplications</li>
				<li>Maintaining server hardware and infrastructure along with server security</li>
				<li>Used professional video editing tools such as Adobe Premiere Pro and Adobe
					After Effects to create high quality videos</li>
				<li>Supported and maintained multiple popular game servers with large
					communities</li>
				<li><a href="/projects">See my open source projects here</a></li>
			</ul>
		</div>
	</div>
	<div class="card">
		<div class="title">Google</div>
		<div class="subtitle">
			<div>Software Engineer Intern</div>
			<div>Multiple Locations</div>
			<div>June - September, 2014 and 2015</div>
		</div>
		<div class="list">
			<ul>
				<li>Engineered Bigtable-based systems and implemented Map-Reduce jobs that
					improved site reliability</li>
				<li>Collaborated with peers to create backend tools that interfaced with these
					databases for CSRs</li>
				<li>Composed frontend features and constructed experiments to evaluate their
					performance</li>
				<li>Added improvements to processes to severely improve code quality and
					maintainability</li>
			</ul>
		</div>
	</div>
	<div class="card">
		<div class="title">Revenue Management Systems, Inc.</div>
		<div class="subtitle">
			<div>Software Engineer</div>
			<div>Seattle, Washington</div>
			<div>January 2014 - March 2015</div>
		</div>
		<div class="list">
			<ul>
				<li>Built tools and scripts to automate mundane tasks</li>
				<li>Co-produced web-based dashboard, tracking database health</li>
				<li>Developed modern, responsive, mobile-first web pages</li>
			</ul>
		</div>
	</div>
	<div class="card">
		<div class="title">Mercer Island School District</div>
		<div class="subtitle">
			<div>Web Developer</div>
			<div>Mercer Island, Washington</div>
			<div>September 2012 - July 2013</div>
		</div>
		<div class="list">
			<ul>
				<li>Created a dynamic web-based computer lab reservation system, complete with
					ticketing support; to be used by a 4,000 student school district</li>
			</ul>
		</div>
	</div>


	<fieldset><legend>Education and Achievements</legend></fieldset>
	<div class="card">
		<div class="title">University of Washington</div>
		<div class="subtitle">
			<div>CS and Informatics</div>
			<div>Seattle, Washington</div>
			<div>September 2013 - June 2017</div>
		</div>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Résumé")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
