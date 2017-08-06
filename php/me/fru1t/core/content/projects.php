<?php
namespace me\fru1t\core\content;

use me\fru1t\core\Project;
use me\fru1t\core\templates\EmptyPage;
use me\fru1t\core\templates\projects\ProjectDetails;
use me\fru1t\core\templates\projects\TimelineElement;

/** @var Project[] $projects */
$projects = [
		Project::create()
				->setDateSpan("8/9/17 - Present")
				->setDateRunning("work in progress")
				->setTitle("Stream Tools")
				->setLanguages("Java")
				->setFrameworks("JavaFX")
				->setShortDescription("This is stuff that explains the project more. It has a shortish description to tell people what it's all about."),
		Project::create()
				->setDateSpan("3/26/15 - 7/1/15")
				->setDateRunning("~5 months")
				->setTitle("Thing Number Two")
				->setLanguages("PHP")
				->setShortDescription("This is stuff that explains the project more. It has a shortish description to tell people what it's all about.")
];

$projectsHtml = "";
for ($i = 0; $i < count($projects); $i++) {
	$projectsHtml .= TimelineElement::renderFromProject($projects[$i], $i);
}

$projectDetailsHtml = ProjectDetails::renderFromProject($projects[0]);

$body = <<<HTML
<div class="page-push"></div>

<div class="container padded">
	<label class="timeline" for="timeline-default">$projectsHtml</label>
</div>

$projectDetailsHtml

HTML;

EmptyPage::start()
	->with(EmptyPage::FIELD_HTML_TITLE, "Projects")
	->with(EmptyPage::FIELD_BODY, $body)
	->render();
