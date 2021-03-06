<?php

namespace me\fru1t\core\templates;

use me\fru1t\common\template\Template;
use me\fru1t\common\template\TemplateField;

/**
 * A blank page for the fru1tme core website.
 */
class EmptyPage extends Template {
	const FIELD_TITLE = "html-title";
	const FIELD_BODY       = "body";

	/**
	 * Produces the content this template defines in the form of an HTML string. This method is
	 * passed a map with template field names as keys, and values that the content page provides.
	 *
	 * @param string[] $fields An associative array mapping fields to ContentField objects.
	 * @return string
	 */
	public static function getTemplateRenderContents_internal(array $fields): string {
		return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fru1tMe - {$fields[self::FIELD_TITLE]}</title>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, user-scalable=no" />
	<meta name="theme-color" content="#ff9800">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="styles.css" />
</head>
<body>
	{$fields[self::FIELD_BODY]}
</body>
</html>
HTML;
	}

	/**
	 * Provides the fields this template contains.
	 *
	 * @return TemplateField[]
	 */
	static function getTemplateFields_internal(): array {
		return TemplateField::createFrom(self::FIELD_TITLE, self::FIELD_BODY);
	}
}
