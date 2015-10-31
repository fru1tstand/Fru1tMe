<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div id="dictionary-worm" class="project-header">
		<div class="container">
			<div class="page-header">
				<h1>Dictionary Worm</h1>
				<p>Match letters to make words. Track game play statistics, and challenge yourself to
					grow.</p>
			</div>
		</div>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Projects Overview")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
