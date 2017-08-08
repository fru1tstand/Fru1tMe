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
  const FIELD_ELEMENT_ID = "element-id";

  const FIELD_TITLE = "title";
  const FIELD_SHORT_DESCRIPTION = "short-description";
  const FIELD_LONG_DESCRIPTION = "long-description";
  const FIELD_TECH = "tech";
  const FIELD_IMAGES = "images";

  const FIELD_DATE_BEGIN = "date-begin";
  const FIELD_DATE_END = "date-end";
  const FIELD_DATE_RUNNING = "date-running";

  const FIELD_LINKS = "links";

	/**
	 * Produces the content this template defines in the form of an HTML string. This method is passed
	 * a map with template field names as keys, and values that the content page provides.
	 *
	 * @param string[] $fields An associative array mapping fields to ContentField objects.
	 * @return string
	 */
	public static function getTemplateRenderContents_internal(array $fields): string {
	  $techArray = json_decode($fields[self::FIELD_TECH]);
		$techHtml = "";
		if ($techArray != null) {
      foreach ($techArray as $tech) {
        $techHtml .= "<div>$tech</div> ";
      }
    }

    $imagesArray = json_decode($fields[self::FIELD_IMAGES]);
    $imagesHtml = "";
    if ($imagesArray != null) {
      foreach ($imagesArray as $image) {
        $imagesHtml .= "<li><img src='$image' alt='a cool image of this thing' /></li>";
      }
    }

    $linksArray = json_decode($fields[self::FIELD_LINKS]);
    $linksHtml = "";
    if ($linksArray != null) {
      for ($i = 0; $i < count($linksArray); $i += 2) {
        $linksHtml .= "<a href='" . $linksArray[$i + 1] . "' target='_blank'>" . $linksArray[$i]
            . " <i class='fa fa-external-link'></i></a>";
      }
    }

		$sanitizedTitle = preg_replace("/[^a-zA-Z0-9]/", "-", $fields[self::FIELD_TITLE]);

		return <<<HTML
<input type="checkbox" class="controller" id="timeline-{$fields[self::FIELD_ELEMENT_ID]}" checked />
<div class="element" id="$sanitizedTitle">
  <div class="date">
    <div><span>{$fields[self::FIELD_DATE_BEGIN]}</span> - <span>{$fields[self::FIELD_DATE_END]}</span></div>
    <div class="time-span">{$fields[self::FIELD_DATE_RUNNING]}</div>
  </div>
  <a class="title" href="#$sanitizedTitle">{$fields[self::FIELD_TITLE]} <i class="permalink fa fa-link"></i></a>
  
  <label for="timeline-{$fields[self::FIELD_ELEMENT_ID]}">
    <div class="tech">$techHtml</div>
    <div class="description">{$fields[self::FIELD_SHORT_DESCRIPTION]}</div>
    <i class="collapse-arrow fa fa-angle-down"></i>
	</label>
	
	<div class="more">
	  <ul class="image-list">$imagesHtml</ul>
	  <div class="long-description">{$fields[self::FIELD_LONG_DESCRIPTION]}</div>
	  <div class="links">$linksHtml</div>
	  <label for="timeline-{$fields[self::FIELD_ELEMENT_ID]}"><i class="collapse-arrow fa fa-angle-up"></i></label>
  </div>
</div>
HTML;

	}

	/**
	 * Provides the fields this template contains. Return null or an empty array to signal no fields.
	 *
	 * @return null|TemplateField[]
	 */
	static function getTemplateFields_internal(): ?array {
    return TemplateField::createFrom(self::FIELD_SHORT_DESCRIPTION,
        self::FIELD_TECH,
        self::FIELD_TITLE,
        self::FIELD_DATE_RUNNING,
        self::FIELD_ELEMENT_ID,
        self::FIELD_DATE_BEGIN,
        self::FIELD_DATE_END,
        self::FIELD_IMAGES,
        self::FIELD_LONG_DESCRIPTION,
        self::FIELD_LINKS);
	}

	/**
	 * Renders this template with a project and labelId as HTML.
	 * @param Project $project
	 * @param string $labelId
	 * @return string
	 */
	public static function renderFromProject(Project $project, string $labelId): string {
		return self::start()
				->with(self::FIELD_ELEMENT_ID, $labelId)
				->with(self::FIELD_DATE_RUNNING, $project->getDateRunning())
				->with(self::FIELD_TITLE, $project->getTitle())
        ->with(self::FIELD_TECH, $project->getTech())
        ->with(self::FIELD_IMAGES, $project->getImages())
				->with(self::FIELD_SHORT_DESCRIPTION, $project->getShortDescription())
        ->with(self::FIELD_DATE_BEGIN, $project->getDateBegin())
        ->with(self::FIELD_DATE_END, $project->getDateEnd())
        ->with(self::FIELD_LONG_DESCRIPTION, $project->getLongDescription())
        ->with(self::FIELD_LINKS, $project->getLinks())
        ->render(false, true);
	}
}
