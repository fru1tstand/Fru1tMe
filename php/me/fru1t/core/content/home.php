<?php
namespace me\fru1t\core\content;

use me\fru1t\core\templates\EmptyPage;

$body = <<<HTML
<div class="home container padded">
  <div class="page-push"></div>
  <div class="title">Fru1t.Me</div>
  <div class="links">
    <a href="/resume">Resume</a>
    <a href="/projects">Projects</a>
  </div>
</div>
HTML;

EmptyPage::start()
	->with(EmptyPage::FIELD_TITLE, "Example title")
	->with(EmptyPage::FIELD_BODY, $body)
	->render();
