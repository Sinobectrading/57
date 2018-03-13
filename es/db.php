<?php 
	define('DB_SERVER','localhost');
	define('DB_NAME', 'llc_shipment');
	define('DB_USER', 'alexgao');
	define('DB_PASSWORD', '123456Gp$$');
	//Database connection
		try{
			$conn = new pdo("mysql:host=".DB_SERVER."; dbname=".DB_NAME,DB_USER,DB_PASSWORD);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			die("Connection failed".$e->getMessage);
		}
?>