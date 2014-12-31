<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/import.php';

class Settings {
	const SETTINGS_SQL_TABLE_NAME = "global_settings";
	
	const QUERY_SELECT_SINGLE_VALUE = "SELECT value FROM global_settings WHERE key = ?";
	
	public static function fromDatabase($key) {
		$sql = SQL::getConnection();
		
	}
}

?>