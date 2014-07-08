<?php 
/*
Plugin Name: Drum Plugin
Plugin URI: http://github.com/qaziasimjan/gitwordpress/
Description: Export pages into git, and import them
Author: qaziasimjan
Version: 1.0

*/
Class Drum extends PDO {
	public static function makeConnection() {
		$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, 
	    		DB_USER, DB_PASSWORD);  
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    return $dbh;
	}	


 public static function GetAll($params = null, $fetchStyle = PDO::FETCH_ASSOC){
	$result = null;
	global $table_prefix;
		$sql = 'SELECT * FROM ' . $table_prefix . 'drum';
		$database_handler = self::makeConnection();
		$statement_handler = $database_handler->prepare($sql);
		$statement_handler->execute();
		$result = $statement_handler->fetch($fetchStyle);
	
}
}
print_r(drum::GetAll($fetchStyle));





?>