<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="home parallax">
	<div class="group-3">
		<div class="layer-10">
			<h1>Fru1tMe</h1>
		</div>
		<!--<div class="layer-frozen">-->
			<!--<img src="https://s3.amazonaws.com/ks_web/fru1t.me/blurred-trees-bg.jpg" alt="" />-->
		<!--</div>-->
	</div>
	<div class="group-1">
		<div class="layer-0">
			<p class="centered">
				This website is one giant experiment for me to play around with different
				web technologies and such. Enjoy random tidbits of my attention span running
				around different facets of the web and exploring their possibilities. Want to
				learn how I did something? Look through the source! I try my best to
				document everything so that others may learn from me, just as I have learned
				from others.
			</p>
		</div>

		<div class="layer-2">ffff</div>
	</div>


</div>
HTML;


ContentPageBuilder::ofTemplate(Fru1tMeTemplate::getClass())
	->setField(Fru1tMeTemplate::FIELD_TITLE, "Home")
	->setField(Fru1tMeTemplate::FIELD_BODY, $body)
	->register();
