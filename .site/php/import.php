<?php
/**
 * This file is used for magics/java style importing
 */

//Desky
// define("PATH_WEB_ROOT" , "E:/Work/Eclipse workspaces/Kodleeshare");
// define("PATH_PHP_LIBRARIES", PATH_WEB_ROOT . "/Fru1tMe-Libraries/php");

//Lappy
// define("PATH_WEB_ROOT" , "/home/kodlee/workspaces/kodleeshare");
// define("PATH_PHP_LIBRARIES", PATH_WEB_ROOT . "/Libraries/php");

//Prod
define("PATH_WEB_ROOT" , "/var/www/websites");
define("PATH_PHP_LIBRARIES", PATH_WEB_ROOT . "/libraries/php");

define("PATH_PHP", $_SERVER['DOCUMENT_ROOT'] . "/.site/php");

class import {
	//Library-specific-esque things
	/**
	 * Imports the MySQLi libraries along with the project SQL library
	 */
	public static function SQL() {
		//Order matters. QueryBuilder relies on QueryResult.
		require_once PATH_PHP_LIBRARIES . "/MySQL/QueryResult.php";
		require_once PATH_PHP_LIBRARIES . "/MySQL/QueryBuilder.php";
		require_once PATH_PHP . '/SQL.php';
	}
	/**
	 * Imports the PageData libraries that include page requests through POST/GET
	 * as well as web Session management. Sets up the session as well.
	 */
	public static function PageData() {
		require_once PATH_PHP_LIBRARIES . "/PageData/Request.php";
		require_once PATH_PHP_LIBRARIES . "/PageData/Session.php";
		
		//Start the session
		import::Settings();
		Session::start(Settings::SESSION_NAME);
	}
	/**
	 * Imports the Facebook API
	 */
	public static function Facebook() {
		require_once PATH_PHP_LIBRARIES . "/Facebook/FacebookSDKException.php";
		require_once PATH_PHP_LIBRARIES . "/Facebook/FacebookRequestException.php";
		require_once PATH_PHP_LIBRARIES . "/Facebook/FacebookSignedRequestFromInputHelper.php";
		require_once PATH_PHP_LIBRARIES . "/Facebook/GraphObject.php";
		self::requireFolder(PATH_PHP_LIBRARIES . "/Facebook");
	}

	/**
	 * Imports the standard toolkit including
	 * 		OutputBuffering
	 */
	public static function Standard() {
		self::requireFolder(PATH_PHP_LIBRARIES . "/Standard");
	}
	
	//Project Specific
	public static function Page() {
		require_once PATH_PHP . "/Page.php";
	}
	public static function APIHandlers() {
		import::APIHandler();
		import::requireFolder(PATH_PHP . "/APIHandlers");
	}
	public static function APIHandler() {
		require_once PATH_PHP . "/APIHandler.php";
	}
	public static function JSONMaps() {
		import::JSONMap();
		import::requireFolder(PATH_PHP . "/JSONMaps");
	}
	public static function JSONMap() {
		require_once PATH_PHP . "/JsonMap.php";
	}
	public static function Security() {
		require_once PATH_PHP . "/Security.php";
	}
	public static function Settings() {
		require_once PATH_PHP . "/Settings.php";
	}
	
	private static function requireFolder($folder) {
		foreach (glob($folder . "/*.php") as $file) {
			require_once $file;
		}
	}
}

?>