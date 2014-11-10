<?php
/**
 * "Enums"
 */
class FILE_LOCATION {
	const PAGES = ".internal/pages/";
}
class PAGE_ALIAS {
	const HOME = "home.php";
	const MIDI = "midi.php";
	const PERSONAL = "personal.php";
}

class Page {
	const GET_BODY_ONLY = "bodyonly";
	const GET_PAGE = "page";
	
	/**
	 * Checks to see if the index exists in GET and returns the value if one exists,
	 * otherwise returns null.
	 * @param string $index
	 * @return mixed|NULL
	 */
	public static function getSafeGet($index) {
		if (isset($_GET[$index])) return $_GET[$index];
		return null;
	}
	
	/**
	 * Checks to see if the index exists in POST and returns the value if one exists,
	 * otherwise returns null.
	 * @param string $index
	 * @return mixed|NULL
	 */
	public static function getSafePost($index) {
		if (isset($_POST[$index])) return $_POST[$index];
		return null;
	}
	
	/**
	 * Checks if the get body only flag is sent
	 * @return boolean
	 */
	public static function getBodyOnlyRequest() {
		return self::getSafeGet(self::GET_BODY_ONLY) != null;
	}
	
	/**
	 * @return string The file location for the page 
	 */
	public static function getPageLocation($pageAlias) {
		//Search constants first
		$refClass = new ReflectionClass("PAGE_ALIAS");
		$pageAlias = strtoupper($pageAlias);
		if ($refClass->hasConstant($pageAlias)) 
			return FILE_LOCATION::PAGES . $refClass->getConstant($pageAlias);
		
		//All else failed, return home
		return FILE_LOCATION::PAGES . PAGE_ALIAS::HOME;
	}
	
	/**
	 * @return string The requested page through GET
	 */
	public static function getPageRequest() {
		return self::getSafeGet(self::GET_PAGE);
	}
}


?>