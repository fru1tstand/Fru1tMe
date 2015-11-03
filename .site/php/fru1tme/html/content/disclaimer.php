<?php
namespace fru1tme\html\content;
use common\template\ContentPageBuilder;
use fru1tme\html\Fru1tMeTemplate;

$body = <<<HTML
<div class="resume nav-push">
	<div class="container">
		<div class="page-header">
			<h1>Disclaimer</h1>
			<p>I'm just a poor college student :( Please don't sue me...</p>
		</div>
	</div>

	<fieldset><legend>Disclaimers</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>If you require any more information or have any questions about my site's
				disclaimer, please feel free to contact me by email at legal@kodleeshare.net</li>
			<li>All the information on this website is publish in good faith and for general
				information purpose only. I do not make any warranties about the completeness,
				reliability, and/or accuracy of this information. Any action you take upon the
				information you find on this website (fru1t.me), is strictly at your own risk.
				fru1t.me will not be liable for any losses and/or damages in connection with the
				use of this website.</li>
			<li>From this website, you can visit other websites by following hyperlinks to such
				external sites. While I strive to provide only quality links to useful and
				ethical websites, I have no control over the content and nature of these sites.
				These links to other websites do not imply a recommendation for all the content
				found on these sites. Site owners and content may change without notice and may
				occur before I have the opportunity to remove a link which may have gone 'bad'.</li>
			<li>Please be also aware that when you leave our website, other sites may have
				different privacy policies and terms which are beyond my control. Please be sure
				to check the Privacy Policies of these sites as well as their "Terms of Service"
				before engaging in any business or uploading any information.</li>
			<li>I reserve the right to modify these terms, at any time, without prior notice.</li>
		</ul>
	</div>

	<fieldset><legend>Consent</legend></fieldset>
	<div class="container nopadding">
		<ul class="card-list">
			<li>By using this website, you hereby consent to this disclaimer and agree to its
				terms.</li>
			<li>Last modified November 3rd, 2015</li>
		</ul>
	</div>
</div>
HTML;


ContentPageBuilder::of(Fru1tMeTemplate::getClass())
		->set(Fru1tMeTemplate::FIELD_TITLE, "Résumé")
		->set(Fru1tMeTemplate::FIELD_BODY, $body)
		->register();
