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
}

?>