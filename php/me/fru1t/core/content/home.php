<?php
namespace me\fru1t\core\content;

use me\fru1t\core\templates\EmptyPage;

$body = <<<HTML
<div class="home">
	<div class="title">Fru1t.Me</div>
	<ul class="links">
		<li><a href="#">Resume</a></li>
		<li><a href="#">Projects</a></li>
		<li><a href="#">StalkMe</a></li>
	</ul>
</div>

<div class="home-background"></div>
HTML;

EmptyPage::start()
	->with(EmptyPage::FIELD_HTML_TITLE, "Example title")
	->with(EmptyPage::FIELD_BODY, $body)
	->render();
