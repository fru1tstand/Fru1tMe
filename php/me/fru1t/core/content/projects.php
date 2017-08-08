<?php
namespace me\fru1t\core\content;

use me\fru1t\core\Project;
use me\fru1t\core\templates\EmptyPage;
use me\fru1t\core\templates\projects\ProjectDetails;
use me\fru1t\core\templates\projects\TimelineElement;

/** @var Project[] $projects */
$projects = [
		Project::create()
        ->setDateBegin("August 9th, 2017")
        ->setDateEnd("Present")
				->setDateRunning("work in progress")
				->setTitle("Stream Tools")
				->setTech(json_encode(["Java", "JavaFX"]))
        ->setImages(json_encode([
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-1.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-2.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-3.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-4.gif",
            "https://s3.amazonaws.com/ks_web/fru1t.me/projects/powerbot-ss-5.gif"
        ]))
				->setShortDescription("This is stuff that explains the project more. It has a shortish description to tell people what it's all about.")
        ->setLongDescription(""
            . "<p>This game was where it all started. Singlehandedly jumped my interest in "
            . "programming, and not because the game made you program. It was because I got bored "
            . "of it. The nostalgia while making this page... oh... Brings back some really sweet "
            . "memories.</p>"

            . "<div>My Contributions</div>"
            . "<p>As a Powerbot scripter, I used their API to create sequences of actions that "
            . "completed an ultimate task within the game. In more recent times, I did a lot of "
            . "abstraction development for other scripters to use. I created higher quality, more "
            . "human-like methods within my framework, so that detection of script usage would "
            . "decrease. I also developed a very lightweight dependency injection framework called "
            . "Slick.</p>"

            . "<div>What is it?</div>"
            . "<p>RuneScape was (still is?) a java-based MMORPG game that has an open-ended play "
            . "style. This meant that, while players could follow and complete quests, others "
            . "could also simply level up skills which included mining, fishing, cooking, etc. "
            . "These tasks took a very, very, very long time to do manually, so a team of "
            . "developers created Powerbot which supplied an API for automating interactions "
            . "within the game.</p>")
        ->setLinks(json_encode([
            "GitHub (Newer)", "https://github.com/fru1tstand/Powerbot",
            "GitHub (Newer)", "https://github.com/fru1tstand/Powerbot",
            "GitHub (Newer)", "https://github.com/fru1tstand/Powerbot"
        ])),

		Project::create()
        ->setDateBegin("March 26th, 2015")
        ->setDateEnd("June 1st, 2015")
				->setDateRunning("~5 months")
				->setTitle("Thing Number Two")
				->setTech(json_encode(["PHP"]))
				->setShortDescription("This is stuff that explains the project more. It has a shortish description to tell people what it's all about.")
];

$projectsHtml = "";
for ($i = 0; $i < count($projects); $i++) {
	$projectsHtml .= TimelineElement::renderFromProject($projects[$i], $i);
}

$body = <<<HTML
<div class="page-push"></div>

<div class="container padded">
	<label class="timeline" for="timeline-default">$projectsHtml</label>
</div>
HTML;

EmptyPage::start()
	->with(EmptyPage::FIELD_HTML_TITLE, "Projects")
	->with(EmptyPage::FIELD_BODY, $body)
	->render();
