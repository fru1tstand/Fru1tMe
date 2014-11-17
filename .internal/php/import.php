<?php
/**
 * This file is used for magics/java style importing
 */

define("PATH_INTERNAL_PAGE", $_SERVER['DOCUMENT_ROOT'] . "/.internal/pages");
define("PATH_INTERNAL_PHP", $_SERVER['DOCUMENT_ROOT'] . "/.internal/php");

class import {
	public static function Page() {
		require_once PATH_INTERNAL_PHP . "/Page.php";
	}
	public static function SQL() {
		require_once PATH_INTERNAL_PHP . '/SQL.php';
	}
	public static function APIHandlers() {
		import::APIHandler();
		import::requireFolder("/APIHandlers");
	}
	public static function APIHandler() {
		require_once PATH_INTERNAL_PHP . "/APIHandler.php";
	}
	public static function JSONMaps() {
		import::JSONMap();
		import::requireFolder("/JSONMaps");
	}
	public static function JSONMap() {
		require_once PATH_INTERNAL_PHP . "/JsonMap.php";
	}
	
	private static function requireFolder($folder) {
		foreach (glob(PATH_INTERNAL_PHP . $folder . "/*.php") as $file) {
			require_once $file;
		}
	}
}

?>