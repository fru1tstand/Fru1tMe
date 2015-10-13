<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/fru1tme/Setup.php';
use common\base\OutputBuffering;
use common\template\TemplateUtils;

//We do this so that page scripts have an opportunity to send headers
OutputBuffering::start();

TemplateUtils::renderRequestedContentPage("", "");

OutputBuffering::flush();
