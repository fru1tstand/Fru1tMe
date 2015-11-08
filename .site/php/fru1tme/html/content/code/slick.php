<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="project nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Slick</h1>
			<p>a Simple Lightweight dependency InjeCtion frameworK.</p>
		</div>
	</div>

	<div class="content-push"></div>
	<div class="container">
		<div class="comment">Article in progress...</div>
	</div>

	<div class="container nopadding">
		<div class="card-list">
			<a href="/code">Back to Code <i class="fa fa-arrow-left"></i></a>
		</div>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Code / Slick")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
