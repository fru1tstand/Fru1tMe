<?php
namespace me\fru1t\core\content;

use me\fru1t\core\templates\EmptyPage;

$body = <<<HTML
HTML;

EmptyPage::start()
	->with(EmptyPage::FIELD_HTML_TITLE, "Example title")
	->with(EmptyPage::FIELD_BODY, $body)
	->render();
