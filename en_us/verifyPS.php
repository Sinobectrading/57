<?php 
session_start();
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

define('DB_SERVER','localhost');
define('DB_NAME', 'llclogin');
define('DB_USER', 'root');
define('DB_PASSWORD', '#9jc>Cn6');
	//Database connection
		try{
			$pdoconn = new pdo("mysql:host=".DB_SERVER."; dbname=".DB_NAME,DB_USER,DB_PASSWORD);
			$pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			die("Connection failed".$e->getMessage);
		}

$email = $_POST["email"];
$ps = $_POST["password"];

 
if ( isset($ps) && strlen($ps)>3 ) {
 	$select = $pdoconn->prepare("SELECT * FROM users WHERE email=:email");
	$select->bindParam(':email',$email, PDO::PARAM_STR); 
	$select->execute();
	$row = $select->fetch(PDO::FETCH_ASSOC);
	if( password_verify($ps, $row['password']) ){
		echo '{"success":true}';
		$_SESSION["user"] = $email;
	}
	else {
		echo '{"success":false}';
	}
}
unset($select);
?>