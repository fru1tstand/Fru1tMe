<?php
/**
 * This file is used for magics/java style importing
 */


define("PATH_PHP_LIBRARIES", $_SERVER['DOCUMENT_ROOT'] . "/.site/php/libraries");
define("PATH_PHP", $_SERVER['DOCUMENT_ROOT'] . "/.site/php");

class import {
	
	public static function Page() {
		require_once PATH_PHP . "/Page.php";
	}
	public static function SQL() {
		require_once PATH_PHP . '/SQL.php';
	}
	public static function APIHandlers() {
		import::APIHandler();
		import::requireFolder("/APIHandlers");
	}
	public static function APIHandler() {
		require_once PATH_PHP . "/APIHandler.php";
	}
	public static function JSONMaps() {
		import::JSONMap();
		import::requireFolder("/JSONMaps");
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
		foreach (glob(PATH_PHP . $folder . "/*.php") as $file) {
			require_once $file;
		}
	}
}

?>