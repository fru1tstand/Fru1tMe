<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::Settings();
import::Facebook();
use Facebook\FacebookRedirectLoginHelper;


$redir = "http://fru1tme.local/tools/csgo_betting";
$settings = Settings::getMultipleFromDatabase(array(Settings::KEY_FACEBOOK_LOGIN_APP_ID, Settings::KEY_FACEBOOK_LOGIN_APP_SECRET));
$helper = new FacebookRedirectLoginHelper($redir,
		$settings[Settings::KEY_FACEBOOK_LOGIN_APP_ID],
		$settings[Settings::KEY_FACEBOOK_LOGIN_APP_SECRET]);
?>

Betting page