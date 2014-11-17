<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.internal/php/import.php';

/**
CREATE TABLE `remote_api_calls` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `name` char(64) CHARACTER SET latin1 NOT NULL,
   `expires` int(10) NOT NULL,
   `value` longtext CHARACTER SET latin1,
   PRIMARY KEY (`id`,`name`),
   UNIQUE KEY `id_UNIQUE` (`id`),
   UNIQUE KEY `name_UNIQUE` (`name`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8
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
	/**
	 * Gets a connection to the MySQL database.
	 * @throws mysqli_sql_exception
	 * @return mysqli
	 */
	public static function getConnection() {
		if (is_null(SQL::$connection)) {
			SQL::$connection = new mysqli(SQL::HOST, SQL::USERNAME, SQL::$pw, SQL::DATABASE);
			SQL::$connection->set_charset('utf8');
		}
		if (SQL::$connection->connect_error)
			throw new mysqli_sql_exception("Failed to connect to database: " . SQL::$connection->connect_error);
		return SQL::$connection;
	}
}
?>