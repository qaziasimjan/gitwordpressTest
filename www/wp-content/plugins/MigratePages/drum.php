<?php 
/*
Plugin Name: Migrate Pages Plugin
Plugin URI: http://github.com/rhildred/gitwordpress/
Description: Export pages into git, and import them
Author: Rich Hildred
Version: 1.0
Author URI: http://syndicateme.net/
*/
Class Drum extends PDO {
	public static function makeConnection() {
		$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, 
	    		DB_USER, DB_PASSWORD);  
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    return $dbh;
	}	


 function GetAll($params = null, $fetchStyle = PDO::FETCH_ASSOC){
	$result = null;
	
		$sql = 'SELECT * FROM ' . $table_prefix . 'drum';
		$database_handler = drum::makeConnection();
		$statement_handler = $database_handler->prepare($sql);
		$statement_handler->execute();
		$result = $statement_handler->fetch($fetchStyle);
	
}
}
print_r(drum::GetAll($fetchStyle));





?>