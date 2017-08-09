<?php
namespace me\fru1t\core\templates;
use me\fru1t\common\template\Template;
use me\fru1t\common\template\TemplateField;

/**
 *
 */
class HeaderPage extends Template {
  const FIELD_BODY = "body";
  const FIELD_TITLE = "title";

  public static function getTemplateRenderContents_internal(array $fields): string {
    $body = <<<HTML
<header class="global-header">
  <ul>
    <li><span class="logo">Fru1tMe</span></li>
    <li><a href="/">Home</a></li>
    <li><a href="/resume">Resume</a></li>
    <li><a href="/projects">Projects</a></li>
  </ul>
</header>
<div class="header-push"></div>
{$fields[self::FIELD_BODY]}
HTML;

    return EmptyPage::start()
        ->with(EmptyPage::FIELD_BODY, $body)
        ->with(EmptyPage::FIELD_TITLE, $fields[self::FIELD_TITLE])
        ->render(false, true);
  }

  static function getTemplateFields_internal(): array {
    return TemplateField::createFrom(self::FIELD_BODY, self::FIELD_TITLE);
  }

}
