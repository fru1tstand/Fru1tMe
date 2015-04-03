<?php
/**
 * This file is used for magics/java style importing
 */

define("PATH_PHP", $_SERVER['DOCUMENT_ROOT'] . "/.site/php");

class import {
	//Library-specific-esque things
	/**
	 * Imports the MySQLi libraries along with the project SQL library
	 */
	public static function SQL() {
		//Order matters. QueryBuilder relies on QueryResult.
		require_once PATH_PHP . "/MySQL/QueryResult.php";
		require_once PATH_PHP . "/MySQL/QueryBuilder.php";
		require_once PATH_PHP . "/SQL.php";
	}
	/**
	 * Imports the PageData libraries that include page requests through POST/GET
	 * as well as web Session management. Sets up the session as well.
	 */
	public static function PageData() {
		require_once PATH_PHP . "/PageData/Request.php";
		require_once PATH_PHP . "/PageData/Session.php";
		
		//Start the session
		import::Settings();
		Session::start(Settings::SESSION_NAME);
	}
	/**
	 * Imports the Facebook API
	 */
	public static function Facebook() {
		require_once PATH_PHP . "/Facebook/FacebookSDKException.php";
		require_once PATH_PHP . "/Facebook/FacebookRequestException.php";
		require_once PATH_PHP . "/Facebook/FacebookSignedRequestFromInputHelper.php";
		require_once PATH_PHP . "/Facebook/GraphObject.php";
		self::requireFolder(PATH_PHP . "/Facebook");
	}

	/**
	 * Imports the standard toolkit including
	 * 		OutputBuffering
	 */
	public static function Standard() {
		self::requireFolder(PATH_PHP . "/Standard");
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