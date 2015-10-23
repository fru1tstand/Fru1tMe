<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="resume nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Kodlee Yin</h1>
			<p><i class="k-at">l</i><i class="kshare">esh</i>.net</p>
		</div>
	</div>

	<fieldset><legend>Connect</legend></fieldset>
	<div class="container nopadding">
		<div class="card-list">
			<a target="_blank" href="https://www.linkedin.com/pub/kodlee-yin/a4/a0a/82b">LinkedIn <i class="fa fa-linkedin"></i></a>
			<a target="_blank" href="https://github.com/fru1tstand">GitHub <i class="fa fa-github"></i></a>
		</div>
	</div>

	<fieldset><legend>Experience</legend></fieldset>
	<div class="container nopadding">
		<div class="card">
			<div class="title">KodleeShare / Fru1tMe</div>
			<div class="subtitle">
				<div class="position">Web Developer</div>
				<div class="location">Seattle, Washington</div>
				<div class="dates">2008 - Present</div>
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
				</ul>
			</div>
		</div>
		<div class="card-list inline">
			<a href="/projects">Click here to view my projects</a>
		</div>

		<div class="card">
			<div class="title">Google</div>
			<div class="subtitle">
				<div class="position">Software Engineer Intern</div>
				<div class="location">Multiple Locations</div>
				<div class="dates">June - September, 2014 and 2015</div>
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
				<div class="position">Software Engineer</div>
				<div class="location">Seattle, Washington</div>
				<div class="dates">January 2014 - March 2015</div>
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
				<div class="position">Web Developer</div>
				<div class="location">Mercer Island, Washington</div>
				<div class="dates">September 2012 - July 2013</div>
			</div>
			<div class="list">
				<ul>
					<li>Created a dynamic web-based computer lab reservation system, complete with
						ticketing support; to be used by a 4,000 student school district</li>
				</ul>
			</div>
		</div>
	</div>

	<fieldset><legend>Education and Achievements</legend></fieldset>
	<div class="container nopadding">
		<div class="card">
			<div class="title">University of Washington</div>
			<div class="subtitle">
				<div>Computer Science and Informatics (WiP)</div>
				<div>Seattle, Washington</div>
				<div>September 2013 - June 2017</div>
			</div>
		</div>
		<div class="card">
			<div class="title">Boy Scouts of America</div>
			<div class="subtitle">
				<div class="position">Eagle Scout</div>
				<div class="location">Mercer Island, Washington</div>
				<div class="dates">September 2013 - June 2017</div>
			</div>
			<div class="list">
				<ul>
					<li>Scripted automation tools that converted deprecated legacy files to CNC machine
						readable formats</li>
				</ul>
			</div>
		</div>
	</div>

	<fieldset><legend>Skills</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>Self-taught programmer with a strong desire to expand knowledge</li>
			<li>Aptitude for creative problem solving and abstract thinking</li>
			<li>Well versed in a multitude of programming patterns and paradigms in PHP, Java, JavaScript, C#</li>
			<li>Deep understanding in dynamic web development with responsive designs using HTML, SASS, CSS, and libraries such as jQuery (core, mobile, UI), and Closure</li>
			<li>Heavy experience with relational databases using MySQL and MSSQL</li>
			<li>Seasoned user of version control system Git with knowledge of SVN and Vault</li>
			<li>A true linux fan who develops on Ubuntu and distributes on Debian</li>
		</ul>
	</div>

	<fieldset><legend>Interests</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>Outdoors and Sports - I love hiking, backpacking, camping, biking, skiing, and playing ping pong</li>
			<li>Public Speaking - I am no stranger to presentations, teaching, and drama improv</li>
			<li>Cooking - I mean... I've caught cereal on fire before, which I've been told, takes a lot of skill to do...</li>
		</ul>
	</div>

	<fieldset><legend>Download</legend></fieldset>
	<div class="container nopadding">
		<div class="card-list">
			<a target="_blank" href="https://s3.amazonaws.com/ks_web/fru1t.me/about/KodleeYin-2015-10-01-PublicResume.pdf">As .pdf <i class="fa fa-file-pdf-o"></i></a>
			<a target="_blank" href="https://s3.amazonaws.com/ks_web/fru1t.me/about/KodleeYin-2015-10-01-PublicResume.docx">As .docx <i class="fa fa-file-word-o"></i></a>
		</div>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Résumé")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
