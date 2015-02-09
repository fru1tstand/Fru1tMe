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
 
 CREATE TABLE `csgo_bets` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `global_user_id` int(11) NOT NULL,
   `csgo_game_id` int(11) NOT NULL,
   `csgo_team_id` int(11) NOT NULL,
   `stake` decimal(4,2) NOT NULL,
   `return` decimal(4,2) DEFAULT NULL,
   `notes` text,
   PRIMARY KEY (`id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1
 
 CREATE TABLE `csgo_events` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `name` char(128) NOT NULL,
   PRIMARY KEY (`id`,`name`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1
 
 CREATE TABLE `csgo_games` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `csgo_event_id` varchar(45) DEFAULT NULL,
   `csgo_team_a_id` int(11) NOT NULL,
   `csgo_team_b_id` int(11) NOT NULL,
   `csgo_team_won_id` int(11) DEFAULT NULL,
   `team_a_rounds_won` int(2) unsigned DEFAULT NULL,
   `team_b_rounds_won` int(2) unsigned DEFAULT NULL,
   `date` int(10) DEFAULT NULL,
   PRIMARY KEY (`id`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1
 
 CREATE TABLE `csgo_teams` (
   `id` int(11) NOT NULL AUTO_INCREMENT,
   `name` char(64) NOT NULL,
   `shortname` char(32) DEFAULT NULL,
   PRIMARY KEY (`id`,`name`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1
 
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
	const USERNAME = "root";
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