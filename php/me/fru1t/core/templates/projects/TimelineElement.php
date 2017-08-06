<?php

namespace me\fru1t\core\templates\projects;
use me\fru1t\common\language\Preconditions;
use me\fru1t\common\template\Template;
use me\fru1t\common\template\TemplateField;
use me\fru1t\core\Project;

/**
 * A partial template belonging to the /projects page.
 */
class TimelineElement extends Template {
	const FIELD_DATE_SPAN       = "date-span";
	const FIELD_DATE_RUNNING    = "date-running";
	const FIELD_TITLE           = "title";
	const FIELD_TECH_LANGUAGES  = "tech-languages";
	const FIELD_TECH_FRAMEWORKS = "tech-frameworks";
	const FIELD_DESCRIPTION     = "description";
	const FIELD_LABEL_ID        = "label-id";

	/**
	 * Produces the content this template defines in the form of an HTML string. This method is passed
	 * a map with template field names as keys, and values that the content page provides.
	 *
	 * @param string[] $fields An associative array mapping fields to ContentField objects.
	 * @return string
	 */
	public static function getTemplateRenderContents_internal(array $fields): string {
		$frameworksHtml = "";
		if (!Preconditions::isNullEmptyOrWhitespace($fields[self::FIELD_TECH_FRAMEWORKS])) {
			$frameworksHtml =
					"<div class=\"frameworks\">{$fields[self::FIELD_TECH_FRAMEWORKS]}</div>";
		}

		return <<<HTML
<input type="radio" name="timeline" id="timeline-{$fields[self::FIELD_LABEL_ID]}" />
<label class="element" for="timeline-{$fields[self::FIELD_LABEL_ID]}">
	<div class="date">
		<div class="span">{$fields[self::FIELD_DATE_SPAN]}</div>
		<div class="running">{$fields[self::FIELD_DATE_RUNNING]}</div>
	</div>
	<div class="title">{$fields[self::FIELD_TITLE]}</div>
	<div class="tech">
		<div class="languages">{$fields[self::FIELD_TECH_LANGUAGES]}</div>
		$frameworksHtml
	</div>
	<div class="description">{$fields[self::FIELD_DESCRIPTION]}</div>
</label>
HTML;

	}

	/**
	 * Provides the fields this template contains. Return null or an empty array to signal no fields.
	 *
	 * @return null|TemplateField[]
	 */
	static function getTemplateFields_internal(): ?array {
		return TemplateField::createFrom(self::FIELD_DESCRIPTION, self::FIELD_TECH_FRAMEWORKS,
				self::FIELD_TECH_LANGUAGES, self::FIELD_TITLE, self::FIELD_DATE_RUNNING,
				self::FIELD_DATE_SPAN, self::FIELD_LABEL_ID);
	}

	/**
	 * Renders this template with a project and labelId as HTML.
	 * @param Project $project
	 * @param string $labelId
	 * @return string
	 */
	public static function renderFromProject(Project $project, string $labelId): string {
		return self::start()
				->with(self::FIELD_LABEL_ID, $labelId)
				->with(self::FIELD_DATE_SPAN, $project->getDateSpan())
				->with(self::FIELD_DATE_RUNNING, $project->getDateRunning())
				->with(self::FIELD_TITLE, $project->getTitle())
				->with(self::FIELD_TECH_LANGUAGES, $project->getLanguages())
				->with(self::FIELD_TECH_FRAMEWORKS, $project->getFrameworks())
				->with(self::FIELD_DESCRIPTION, $project->getShortDescription())
				->render(false, true);
	}
}
