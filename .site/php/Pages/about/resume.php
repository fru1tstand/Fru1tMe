<?php
require_once $_SERVER ['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::Page ();
?>
<div class="backgrounded">
	<div class="container">
		<div class="spacer page"></div>
		<?php page::includeNav(NAV::ABOUT); ?>
		<div class="page-title">
			<h1>Kodlee Yin</h1>
			<p class="email">
				<!-- A majority of scrapers don't run javascript -->
				<script>document.write("kodlee");</script><span class="email-at"></span><span class="email-dm">share</span><span class="email-dot"></span>net
			</p>
		</div>
		<div class="hr common-title"></div>
		<div class="spacer content"></div>
	</div>
	<div class="container maxed resume">
		<div class="resume-section start">Experience</div>
		<div class="resume-triple-list">
			<div class="title">Google</div>
			<div class="location">Multiple Locations</div>
			<div class="date">June - September, 2014 and 2015</div>
			<div class="subtitle">Software Engineering Intern</div>
			<ul>
				<li>Engineered Bigtable-based systems and implemented Map-Reduce jobs that improved site reliability</li>
				<li>Collaborated with peers to create backend tools that interfaced with these databases for CSRs</li>
				<li>Composed frontend features and constructed experiments to evaluate their performance</li>
				<li>Added improvements to processes to severely improve code quality and maintainability</li>
			</ul>
		</div>
		<div class="resume-triple-list">
			<div class="title">Revenue Management Systems, Inc.</div>
			<div class="location">Seattle, Washington</div>
			<div class="date">January 2014 - March 2015</div>
			<div class="subtitle">Software Engineer</div>
			<ul>
				<li>Built tools to automate mundane tasks</li>
				<li>Co-produced a web-based dashboard that tracked database health</li>
				<li>Developed a modern, responsive, mobile-first website</li>
			</ul>
		</div>
		<div class="resume-triple-list">
			<div class="title">Mercer Island School District</div>
			<div class="location">Mercer Island, Washington</div>
			<div class="date">Sept '12 - July '13</div>
			<div class="subtitle">Web Application Developer</div>
			<ul>
				<li>Created a dynamic web-based computer lab reservation system, complete with ticketing support; to be used by a 4,000 student school district</li>
			</ul>
		</div>
		<div class="resume-triple-list">
			<div class="title">Kodleeshare / Fru1tMe</div>
			<div class="location">Seattle, Washington</div>
			<div class="date">'08 - Present</div>
			<div class="subtitle">Web Developer / Server Engineer / "All of the above"</div>
			<ul>
				<li>Pioneering with experimental web technologies such as Canvas, WebAudio, and DOMApplications</li>
				<li>Maintaining server hardware and infrastructure along with server security</li>
				<li>Used professional video editing tools such as Adobe Premiere Pro and Adobe After Effects to create high quality videos</li>
				<li>Supported and maintained multiple popular game servers with large communities</li>
				<li><a href="/projects">See my open source projects here</a></li>
			</ul>
		</div>
		<div class="resume-section end">Experience</div>

		<div class="resume-section start">Education &amp; Achievements</div>
		<div class="resume-triple-list">
			<div class="title">University of Washington</div>
			<div class="location">Seattle, Washington</div>
			<div class="date">Sept '13 - June '17</div>
			<div class="subtitle">Computer Science &amp; Informatics - Work In
				Progress</div>
		</div>
		<div class="resume-triple-list">
			<div class="title">Boy Scouts of America</div>
			<div class="location">Mercer Island, Washington</div>
			<div class="date">Sept '06 - Sept '13</div>
			<div class="subtitle">Eagle Scout</div>
			<ul>
				<li>Created applications and scripts that converted legacy files to CNC machine readable formats</li>
			</ul>
		</div>
		<div class="resume-section end">Education &amp; Achievements</div>

		<div class="resume-section start">Skills</div>
		<ul class="resume-list">
			<li>Self-taught programmer with a strong desire to expand knowledge</li>
			<li>Aptitude for creative problem solving and abstract thinking</li>
			<li>Well versed in a multitude of programming patterns and paradigms in PHP, Java, JavaScript, C#</li>
			<li>Deep understanding in dynamic web development with responsive designs using HTML, SASS, CSS, and libraries such as jQuery (core, mobile, UI), and Closure</li>
			<li>Heavy experience with relational databases using MySQL and MSSQL</li>
			<li>Seasoned user of version control system Git with knowledge of SVN and Vault</li>
			<li>A true linux fan who develops on Ubuntu and distributes on Debian</li>
		</ul>
		<div class="resume-section end">Skills</div>

		<div class="resume-section start">Interests</div>
		<ul class="resume-list">
			<li>Outdoors and Sports - I love hiking, backpacking, camping, biking, skiing, and playing ping pong</li>
			<li>Public Speaking - I am no stranger to presentations, teaching, and drama improv</li>
			<li>Cooking - I mean... I've caught cereal on fire before, which I've been told, takes a lot of skill to do...</li>
		</ul>
		<div class="resume-section end">Interests</div>

	</div>
	<div class="spacer page"></div>
</div>
