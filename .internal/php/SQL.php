<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.internal/php/import.php';
class SQL {
	const HOST = "localhost";
	const DATABASE = "Fru1tMe";
	const USERNAME = "root";
	private static $pw = "You're garbage m8.";
	
	/**
	 * Uninstantiable
	 */
	private function __construct() {}
	
	private static $connection = null;
	public static function getConnection() {
		if (is_null(SQL::$connection)) {
			SQL::$connection = new mysqli(SQL::HOST, SQL::USERNAME, SQL::$pw, SQL::DATABASE, $port, $socket)
		}
	}
}
?>