<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/.internal/php/import.php';
/**
 * "Enums"
 */
class PAGE_ALIAS {
	const HOME = "/home.php";
	const MIDI = "/midi.php";
	const ABOUT = "/about.php";
	const CHANGELOG = "/about/changelog.php";
	const RESUME = "/about/resume.php";
	const PROJECTS = "/projects.php";
}
class NAV {
	const ABOUT = "/about/_nav.php";
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
			return PATH_INTERNAL_PAGE . $refClass->getConstant($pageAlias);
		
		//All else failed, return home
		return PATH_INTERNAL_PAGE . PAGE_ALIAS::HOME;
	}
	
	/**
	 * @return string The requested page through GET
	 */
	public static function getPageRequest() {
		return self::getSafeGet(self::GET_PAGE);
	}
	
	public static function includeNav($path) {
		$refClass = new ReflectionClass("NAV");
		foreach ($refClass->getConstants() as $constantValue) {
			if ($constantValue == $path) {
				include PATH_INTERNAL_PAGE . $path;
				return;
			}
		}
		
	}
}
?>