<?php 
/*
Plugin Name: Drum Plugin
Plugin URI: http://github.com/qaziasimjan/gitwordpress/
Description: conect to the database
Author: qaziasimjan
Version: 2.1.0

*/
Class Drum extends PDO {
	public static function makeConnection() {
		$dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, 
	    		DB_USER, DB_PASSWORD);  
	    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    return $dbh;
	}
	public function Drum(){}	


 public static function GetAll($params = null, $fetchStyle = PDO::FETCH_ASSOC){
	$result = null;
	global $table_prefix;
	try{
		$sql = 'SELECT * FROM ' . $table_prefix . 'drum';
		$database_handler = self::makeConnection();
		$statement_handler = $database_handler->prepare($sql);
		$statement_handler->execute();
		$result = $statement_handler->fetchAll($fetchStyle);		
		return $result;
	}
	catch(PDOException $e){
		echo ('{"error":'. $e->getMessage().'}');
	}
	if(Drum::GetAll != null){
		$database_handler = null;
	}
}
}
?>