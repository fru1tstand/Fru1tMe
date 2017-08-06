<?php

namespace me\fru1t\core\templates\projects;

use me\fru1t\common\template\Template;
use me\fru1t\common\template\TemplateField;
use me\fru1t\core\Project;

class ProjectDetails extends Template {
	const FIELD_TITLE = "title";

	/**
	 * Produces the content this template defines in the form of an HTML string. This method is passed
	 * a map with template field names as keys, and values that the content page provides.
	 *
	 * @param string[] $fields An associative array mapping fields to ContentField objects.
	 * @return string
	 */
	public static function getTemplateRenderContents_internal(array $fields): string {
		return <<<HTML
<input type="radio" name="timeline" id="timeline-default" checked />
<label for="timeline-default" class="project-wrapper">
	<div class="project">
		<div class="title">{$fields[self::FIELD_TITLE]}</div>
		<div class="date">8/9/17 - Present <span>(work in progress)</span></div>
		
		<div class="details">
			<div>Languages: Java</div>
			<div>Frameworks: JavaFX</div>
		</div>
		
		<div class="hr"></div>
		<div class="description">
			<p>This is a long form description of the project. Here I talk 
		in depth about what I learned and other things that went on. This page may be a couple 
		paragraphs, and if it is, will be separated by p tags. We'll use them when it comes to 
		it, but for now, we'll try a single paragraph.</p>
			<p>This will be paragraph two. To, you know, test out the stuff.</p>
		</div>
	</div>
</label>
HTML;

	}

	/**
	 * Provides the fields this template contains. Return null or an empty array to signal no fields.
	 *
	 * @return null|TemplateField[]
	 */
	static function getTemplateFields_internal(): ?array {
		return TemplateField::createFrom(self::FIELD_TITLE);
	}

	public static function renderFromProject(Project $project): string {
		return self::start()
				->with(self::FIELD_TITLE, $project->getTitle())
				->render(false, true);
	}
}
