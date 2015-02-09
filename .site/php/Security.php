<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::Settings();
import::PageData();
import::Facebook();
use Facebook\FacebookSession;

class Security {
	
	private static $hasBasicAuthed = false;
	private static $hasPrivateAuthed = false;
	
	private static $facebookSettings = null;
	
	private function __construct() {}
	
	const FACEBOOK_REDIRECT_ROOT_URL = "http://fru1tme.local/facebook-login";
	
	public static function hasPrivateAuthed() {
		
	}
	
	public static function hasBasicAuthed() {
		if (self::$hasBasicAuthed)
			return true;
		
		//First get facebook settings if we don't have them
		if (is_null(self::$facebookSettings))
			self::$facebookSettings = Settings::getMultipleFromDatabase(
					array(
							Settings::DB_KEY_FACEBOOK_LOGIN_APP_ID,
							Settings::DB_KEY_FACEBOOK_LOGIN_APP_SECRET
					));
		
		//Check facebook auth
		$fbSession = Session::get(Settings::SESSION_KEY_FACEBOOK_SESSION);
		if (!is_null($fbSession) 
				&& ($fbSession instanceof FacebookSession)
				&& $fbSession) {
		}
			
		return false;
	}
}
?>