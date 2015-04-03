<?php
/**
 * 
 * @version 0.1
 */
class Session {
	const LIBRARY_RESERVED_INDEX = "__fru1tme";
	const INDEX_SESSION_ACTIVE = "have_we_started";
	
	//shhhh it's ok.
	private function __construct() {}
	
	/**
	 * Starts a session with the passed id if a session doesn't already exist
	 * @param string $id
	 */
	public static function start($id) {
		if (!self::isSessionStarted()) {
			session_name($id);
			session_start();
			$_SESSION[LIBRARY_RESERVED_INDEX] = array(
					self::INDEX_SESSION_ACTIVE => true
			);
		}
	}
	
	/**
	 * Sets the given key to the given value
	 * @param string $key
	 * @param mixed $value
	 * @throws Exception Thrown if the session has not been started
	 */
	public static function set($key, $value) {
		if (!self::isSessionStarted())
			throw new Exception("Session has not been started");
		$_SESSION[$key] = serialize($value);
	}
	
	/**
	 * Gets the value of the given key or null if not set
	 * @param string $key
	 * @throws Exception Thrown if the session has not been started
	 * @return NULL|mixed
	 */
	public static function get($key) {
		if (!self::isSessionStarted())
			throw new Exception("Session has not been started");
		
		if (!isset($_SESSION[$key]))
			return null;
		
		return unserialize($_SESSION[$key]);
	}
	
	
	/**
	 * Deletes the given key
	 * @param string $key
	 * @throws Exception Thrown if the ession has not been started
	 */
	public static function delete($key) {
		if (!self::isSessionStarted())
			throw new Exception("Session has not been started");
		
		if (isset($_SESSION($key)))
			unset($_SESSION[$key]);
	}
	
	private static function isSessionStarted() {
		return isset($_SESSION[LIBRARY_RESERVED_INDEX],
				$_SESSION[LIBRARY_RESERVED_INDEX][INDEX_SESSION_ACTIVE]);
	}
}
?>