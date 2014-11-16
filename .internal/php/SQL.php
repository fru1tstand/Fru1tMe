<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.internal/php/import.php';

/**
CREATE TABLE `remote_api_calls` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `name` char(64) NOT NULL,
   `fetch_date` int(11) NOT NULL,
   `value` text,
   PRIMARY KEY (`id`,`name`),
   UNIQUE KEY `id_UNIQUE` (`id`),
   UNIQUE KEY `name_UNIQUE` (`name`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1
 */

/**
 * Provides a simple singleton connection to the database.
 */
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
			SQL::$connection = new mysqli(SQL::HOST, SQL::USERNAME, SQL::$pw, SQL::DATABASE);
		}
		return SQL::$connection;
	}
}
?>