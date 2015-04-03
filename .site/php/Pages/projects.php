<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';

?>

<div class="backgrounded">
	<div class="container">
		<div class="spacer page"></div>
		<div class="page-title">
			<h1>Projects</h1>
			<p>
				Here lies everything that I've done, am doing, and will do.
			</p>
		</div>
		<div class="spacer content"></div>
		
		<div class="projects">
			<div class="project-list">
				<div class="page">
					<h1>Active</h1>
					<p>Projects that are currently worked on and improved</p>
				</div>
				<ul>
					<li class="rollover" data-rollover="project-stak">Stak</li>
				</ul>
				<div class="page">
					<h1>Legacy</h1>
					<p>Projects that are still hosted, but not under active development</p>
				</div>
				<ul>
					<li class="rollover" data-rollover="project-midi">KodleeShare: MIDI</li>
				</ul>
				<div class="page">
					<h1>Retired</h1>
					<p>All good things must come to an end. But we can at least admire them in a museum.</p>
				</div>
				<ul>
					<li class="rollover" data-rollover="project-minecraft">KodleeShare: Minecraft</li>
				</ul>
			</div>
			<div id="project-more" class="more">
				<div id="project-stak">
					<h1>Stak</h1>
					<p>("Stack") It's a useful task organizer. Good for homework too.</p>
					<dl>
						<dt>Bulk task management</dt>
						<dd>I got tired of having to edit assignments for a single class one by one. Instead, you can edit them all at once with powerful editing and scheduling features.</dd>
						
						<dt>Reminders</dt>
						<dd>Projects or large assignment aren't meant to be done on the last day, so why are they only shown on the due date? BAM. Now they're not. Set up customizably periodic reminders to get working on that project of yours.</dd>
					
						<dt>Completely Modular</dt>
						<dd>Don't like a feature or two or three? Disable them! This system is designed with you in mind, and because you are unique in how you work, you decide what you want to see and use.</dd>
					</dl>
					<p>Uses: Dynamic Web Standards (PHP, HTML, SASSy CSS, JavaScript, MySQL), Facebook API (PHP)</p>
					<a href="http://homework.fru1t.me/" class="link-external">Goto Homework Thing</a>
				</div>
				<div id="project-midi">
					<h1>Kodleeshare: MIDI</h1>
					<p>Music music music!</p>
					<dl>
						<dt>Search features</dt>
						<dd>Search for your favorite artists and bands and be disappointed when you can't find them!</dd>
						
						<dt>Free with lyrics and video</dt>
						<dd>Enjoy uh the music I guess</dd>
					</dl>
					<p>Uses: Dynamic Web Standards (PHP, HTML, CSS, JavaScript, MySQL), Video Editing Standards (Adobe Premiere Pro, Adobe After Effects)</p>
					<a href="http://midi.fru1t.me/" class="link-external">Goto Kodleeshare: MIDI</a>
				</div>
				<div id="project-minecraft">
					<h1>Kodleeshare: Minecraft</h1>
					<p>A community of a lifetime</p>
					<dl>
						<dt>
							A sad but inevitable end of what could only be described as the grandest ad-hoc community there was.
							With my co-host Carson Beck, we climbed the highest mountains, ran the lowest valleys, and swam the deepest rivers.
							And we couldn't have done it without the people we met along the way.
						</dt>
					</dl>
					<p>Uses: Dynamic Web Standards (PHP, HTML, CSS, JavaScript, MySQL), Game Server Persistance (YAML, SQLite), Game Development (Java), Server Infrastructure and Security</p>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<script src="/.site/js/projects.js"></script>
