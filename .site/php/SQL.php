<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';

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

 CREATE TABLE `global_users` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `public_key` char(128) NOT NULL,
   `username` char(64) NOT NULL,
   `password` char(64) NOT NULL,
   `first_name` char(64) NOT NULL,
   `last_name` char(64) NOT NULL,
   PRIMARY KEY (`id`,`public_key`,`username`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1
 
 CREATE TABLE `remote_api_calls` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `name` char(64) CHARACTER SET latin1 NOT NULL,
   `expires` int(10) NOT NULL,
   `value` longtext CHARACTER SET latin1,
   PRIMARY KEY (`id`,`name`),
   UNIQUE KEY `id_UNIQUE` (`id`),
   UNIQUE KEY `name_UNIQUE` (`name`)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8
 
 CREATE TABLE `global_settings` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `key` CHAR(128) NOT NULL,
  `value` TEXT NULL,
  PRIMARY KEY (`id`, `key`));

 */

/**
 * Provides a simple singleton connection to the database.
 */
class SQL {
	const HOST = "localhost";
	const DATABASE = "Fru1tMe";
	
	//DEVEL
// 	const USERNAME = "root";
	
	//PROD
	const USERNAME = "Fru1tMeWeb";
	
	
	//Nice try, but connections are only allowed through localhost :)
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
	/**
	 * I mean... It's hard to not understand what this does.
	 * @return QueryBuilder
	 */
	public static function createQueryBuilder() {
		self::getConnection();
		return QueryBuilder::create(self::$connection);
	}
}
?>