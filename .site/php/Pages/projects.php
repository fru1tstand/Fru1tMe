<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';

?>

<div class="backgrounded">
	<div class="container">
		<div class="spacer page"></div>
		<div class="page-title">
			<h1>Projects</h1>
			<p>
				Here lies everything that I've done or am doing in my free time (not associated to work).
				The projects are displayed in (mostly) chronological order within each section, by date of inception.
			</p>
		</div>
		<div class="spacer content"></div>

		<div class="projects">
			<div class="project-list">
				<div class="page">
					<h1>Active</h1>
					<p>My current focus</p>
				</div>
				<ul>
					<li class="rollover" data-rollover="project-android-dictworm">DictionaryWorm</li>
					<li class="rollover" data-rollover="project-fru1tme">Fru1t.Me</li>
				</ul>
				<div class="page">
					<h1>Legacy</h1>
					<p>Aged, or otherwise on-hold project</p>
				</div>
				<ul>
					<li class="rollover" data-rollover="project-stak">Stak</li>
					<li class="rollover" data-rollover="project-info-poster">Info 200 Poster Project</li>
					<li class="rollover" data-rollover="project-midi">KodleeShare: MIDI</li>
				</ul>
				<div class="page">
					<h1>Retired</h1>
					<p>Offline, broken, or otherwise scrapped projects</p>
				</div>
				<ul>
					<li class="rollover" data-rollover="project-powerbot">RuneScape Scripting</li>
					<li class="rollover" data-rollover="project-minecraft">KodleeShare: Minecraft</li>
				</ul>
			</div>
			<div id="project-more" class="more">
				<div id="project-powerbot">
					<h1>RuneScape Scripting</h1>
					<p>The game that never dies.</p>
					<dl>
						<dt>What is it?</dt>
						<dd>
							RuneScape was (still is?) a java-based MMORPG game that has an open-ended play style.
							This meant that, while players could follow and complete quests, others could also simply level up skills which included mining, fishing, cooking, etc.
							These tasks took a very, very, very long time to do manually, so a team of developers created Powerbot which supplied an API for automating interactions within the game.
						</dd>
						<dt>My Contributions</dt>
						<dd>
							As a Powerbot scripter, I used their API to create sequences of actions that completed an ultimate task within the game.
							In more recent times, I did a lot of abstraction development for other scripters to use.
							I created higher quality, more human-like methods within my framework, so that detection of script usage would decrease.
							I also developed a very lightweight dependency injection framework called Slick.
						</dd>
					</dl>
					<p>
						Uses:
						Game Development (Java),
						Fun Programming Quirks (Reflection, Generics)
					</p>

					<a class="link-external" target="_blank" href="https://github.com/fru1tstand/Powerbot">Newer source</a>
					<a class="link-external" target="_blank" href="https://github.com/fru1tstand/RSBot">Very old source</a>
				</div>
				<div id="project-fru1tme">
					<h1>Fru1t.Me</h1>
					<p>"Fruit me" is a play on my name in chinese, of which literally translated from Chinese, means fruit stand.</p>
					<dl>
						<dt>What is it?</dt>
						<dd>
							Fru1t.Me is a domain name that I use to distribute my projects and whatever else I can cram into a website.
							Doubling as my portfolio, Fru1t.Me provides a platform for me to mess around with whatever journey my fingers take me to.
						</dd>
					</dl>
					<a href="#">You're already here!</a>
					<a class="link-external" target="_blank" href="https://github.com/fru1tstand/Fru1tMe">See the source</a>
				</div>
				<div id="project-info-poster">
					<h1>Info 200 Poster Project</h1>
					<p>Intellectual foundations' final poster project</p>
					<dl>
						<dt>What is it?</dt>
						<dd>
							At the end of this class's quarter, students had to create a representation of a solution to a data driven issue.
							Instead of a poster, I opted to create a semi-live mockup of my group's idea.
						</dd>
						<dt>Things to note</dt>
						<dd>
							Because the informatics program is built around the interaction of people with technology and data, I developed the site with a very customizable interface.
							The mock includes internationalization (i18n), allowing to change the language between 5 different presets.
							The mock also allows for customization of the color theme, provided by Bootswatch.
						</dd>
						<p>
							Uses:
							Static Web Standards (HTML, Javascript, CSS),
							Frameworks (Bootstrap, Bootswatch, FontAwesome)
						</p>
						<a class="link-external" target="_blank" href="http://info.fru1t.me/">See the mockup</a>
						<a class="link-external" target="_blank" href="https://github.com/fru1tstand/Info200-Poster-Project">See the source</a>
					</dl>
				</div>
				<div id="project-android-dictworm">
					<h1>DictionaryWorm</h1>
					<p>Match letters. Make words.</p>
					<dl>
						<dt></dt>
						<dd>
							<img src="https://s3.amazonaws.com/ks_web/fru1t.me/android/dictionaryworm-ss.png"
								 alt="Dictionary Worm Screenshot" />
						</dd>

						<dt>What is it?</dt>
						<dd>
							DictionaryWorm is a blast to the past game ported to all mobile
							devices. Match adjacent tiles to create words. The longer the word,
							the higher the multiplier, the more points you gain. Game modes
							include the classic "burning tiles", timed, limited moves, and zen
							mode. Enjoy an entertaining game, while flexing your diction.
						</dd>

						<p>
							Uses:
							Framework (PhoneGap/Cordova),
							Static Web Standards (HTML, Javascript, SASS + CSS)
						</p>
						<a href="https://github.com/fru1tstand/DictionaryWorm"
						   class="link-external"
						   target="_blank">See the source</a>
					</dl>
				</div>
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

					<a class="link-external" target="_blank" href="http://stak.fru1t.me/">See the prototype</a>
					<a class="link-external" target="_blank" href="https://github.com/fru1tstand/Fru1tMe-Stak">See the source</a>
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
					<p>Note: This project is on hold.</p>
					<a class="link-external" target="_blank" href="http://midi.fru1t.me/">See the live site</a>
				</div>
				<div id="project-minecraft">
					<h1>Kodleeshare: Minecraft</h1>
					<p>A community of a lifetime</p>
					<dl>
						<dt></dt>
						<dd>
							A sad but inevitable conclusion of what could only be described as the greatest ad-hoc community there existed.
							With my co-host Carson Beck, we climbed the highest mountains, ran the lowest valleys, and swam the deepest rivers.
							And we couldn't have done it without the people we met along the way.
						</dd>

						<dt>What was it?</dt>
						<dd>
							Kodleeshare's Minecraft server was a community-driven game community that prided itself for being dependable.
							With a duo team that never failed to deliver new content and establish a name, the community rose to be known as the most resilient group of gamers within the Minecraft scene.
						</dd>
					</dl>
					<p>
						Uses:
						Dynamic Web Standards (PHP, HTML, CSS, JavaScript, MySQL),
						Game Server Persistence (YAML, SQLite),
						Game Development (Java),
						Server Infrastructure and Security
					</p>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="projects-spacer"></div>

<script src="/.site/js/projects.js"></script>
