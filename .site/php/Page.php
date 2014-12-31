<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';

define("PATH_PHP_PAGES", $_SERVER['DOCUMENT_ROOT'] . "/.site/php/pages");

/**
 * "Enums"
 */
class PAGE_ENUM_CLASSES {
	const ROOT = "PAGE_ALIAS_ROOT";
	const ABOUT = "PAGE_ALIAS_ABOUT";
	const TOOLS = "PAGE_ALIAS_TOOLS";
	const ERRORS = "PAGE_ALIAS_ERRORS";
}
class PAGE_ALIAS_ROOT {
	const HOME = "/home.php";
	const ABOUT = "/about.php";
	const MIDI = "/midi.php";
	const PROJECTS = "/projects.php";
	const TOOLS = "/tools.php";
	const ERRORS = "/errors.php";
}
class PAGE_ALIAS_ABOUT {
	const HOME = "/about/home.php";
	const CHANGELOG = "/about/changelog.php";
	const RESUME = "/about/resume.php";
}
class PAGE_ALIAS_TOOLS {
	const HOME = "/tools/home.php";
	const THETIME = "/tools/thetime.php";
	const CSGO_BETTING = "/tools/csgo-betting.php";
}
class PAGE_ALIAS_ERRORS {
	const HOME = PAGE_ALIAS_ROOT::HOME;
	const UNAUTHORIZED = "/errors/401.php";
}

class NAV {
	const ABOUT = "/about/_nav.php";
}

/**
 * Contains helper methods for retrieving GET/POST data
 */
class Page {
	const GET_BODY_ONLY = "bodyonly";
	const GET_PAGE = "page";
	const GET_OPTION_1 = "op1";
	const GET_OPTION_2 = "op2";
	
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
	 * Returns the file location for the pageAlias in the page enum class passed or default home
	 * page of the enum class.
	 * @return string
	 */
	public static function getPageLocation($pageAlias, $pageEnumClass = PAGE_ENUM_CLASSES::ROOT) {
		//Remove all slashes
		$pageAlias = str_replace("/", "", $pageAlias);
		
		$refClass = new ReflectionClass("PAGE_ENUM_CLASSES");
		if (!in_array($pageEnumClass, $refClass->getConstants()))
			$pageEnumClass = PAGE_ENUM_CLASSES::ROOT;
		
		//Search constants first
		$refClass = new ReflectionClass($pageEnumClass);
		$pageAlias = strtoupper($pageAlias);
		if ($refClass->hasConstant($pageAlias)) 
			return PATH_PHP_PAGES . $refClass->getConstant($pageAlias);
		
		//All else failed, return home
		return PATH_PHP_PAGES . $refClass->getConstant("HOME");
	}
	
	/**
	 * Returns the page request from the URL if it exists, null otherwise
	 * @return string|NULL
	 */
	public static function getPageRequest() {
		return self::getSafeGet(self::GET_PAGE);
	}
	
	/**
	 * Returns option 1 from the URL if it exists, null otherwise
	 * @return string|NULL
	 */
	public static function getOption1() {
		return self::getSafeGet(self::GET_OPTION_1);
	}
	
	/**
	 * Returns option 2 from the URL if it exists, null otherwise
	 * @return string|NULL
	 */
	public static function getOption2() {
		return self::getSafeGet(self::GET_OPTION_2);
	}
	
	public static function includeNav($path) {
		$refClass = new ReflectionClass("NAV");
		foreach ($refClass->getConstants() as $constantValue) {
			if ($constantValue == $path) {
				include PATH_PHP_PAGES . $path;
				return;
			}
		}
		
	}
}
?>