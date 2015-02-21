<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';
import::Settings();
import::PageData();
import::Facebook();
use Facebook\FacebookSession;
use Facebook\Entities\AccessToken;
use Facebook\FacebookRequestException;

class Security {
	private static $hasPrivateAuthed = false;
	
	private static $facebookSettings = null;
	private static $hasInitFacebookSession = false;
	
	private function __construct() {}
	
	const FACEBOOK_REDIRECT_ROOT_URL = "http://fru1tme.local/login-fb";
	const FACEBOOK_UID_PREFIX = "fb-";
	
	public static function hasPrivateAuthed() {
		
	}

	/**
	 * Gets the logged in user's global identification string from wherever they
	 * logged in from or Null if the user is not logged in.
	 * @throws Exception Thrown if any API throws an exception while trying to validate
	 * an active session.
	 * @return string|NULL
	 */
	public static function getBasicAuthedUserId() {
		$supressExceptions = array();
		
		//Make sure these APIs are already initialized
		self::initFacebookSession();
		
		//Check if we're dealing with facebook
		$fbSessionToken = Session::get(Settings::SESSION_KEY_FACEBOOK_SESSION_TOKEN);
		if (!is_null($fbSessionToken)) {
			$fbSession = new FacebookSession($fbSessionToken);
			try {
				$fbSession->validate();
				return (is_null($fbSession->getUserId()) ? self::FACEBOOK_UID_PREFIX . $fbSession->getUserId() : null);
			} catch (FacebookRequestException $ex) {
				$supressExceptions[] = $ex;
				Session::delete(Settings::SESSION_KEY_FACEBOOK_SESSION_TOKEN);
			}
		}
		
		//Are there any supressed exceptions?
		if (count($supressExceptions) > 0) {
			$exText = "The following exceptions occured during checking for basic authentication: ";
			foreach ($supressExceptions as $ex)
				$exText .= $ex->getMessage() . "; \n";
			throw new Exception($exText);
		}
		
		return null;
	}
	
	public static function redirectToFacebookLogin($redirUrl) {
		self::initFacebookSession();
		
	}
	
	/**
	 * Gets the facebook app settings into memory and initializes the facebook session 
	 * if it hasn't been initialized already.
	 */
	private static function initFacebookSession() {
		//Get facebook settings from the db if we don't have them
		if (is_null(self::$facebookSettings))
			self::$facebookSettings = Settings::getMultipleFromDatabase(
					array(
							Settings::DB_KEY_FACEBOOK_LOGIN_APP_ID,
							Settings::DB_KEY_FACEBOOK_LOGIN_APP_SECRET
					));
		
		//Initialize facebook session if it isn't
		if (!self::$hasInitFacebookSession) {
			FacebookSession::setDefaultApplication(
					self::$facebookSettings[Settings::DB_KEY_FACEBOOK_LOGIN_APP_ID], 
					self::$facebookSettings[Settings::DB_KEY_FACEBOOK_LOGIN_APP_SECRET]);
			self::$hasInitFacebookSession = true;
		}
	}
}
?>