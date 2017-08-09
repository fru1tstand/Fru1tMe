<?php

use me\fru1t\core\templates\HeaderPage;

$body = <<<HTML

HTML;

HeaderPage::start()
    ->with(HeaderPage::FIELD_TITLE, "Resume")
    ->with(HeaderPage::FIELD_BODY, $body)
    ->render();
