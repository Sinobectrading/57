<?php 
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

// if (isset($email)) {
// 	echo '{"success":true, "message":"Email is true"}';
// }
// if (isset($ps)) {
// 	echo '{"success":true, "message":"PS is true"}';
// }


if ( isset($email) && !isset($ps)) {
	$query = "SELECT * FROM users WHERE email=:email";
	$stmt = $pdoconn->prepare($query);
	$stmt->bindParam(':email', $email, PDO::PARAM_STR);
	 
	$stmt->execute();
 
	if($stmt->rowCount() > 0){
 		echo '{"success":true, "message":"'.$email.$obje.'"}';
 	}
	else{
		echo '{"success":false, "message":"Email is invalid, please try again."}';
	}
     
}

else {
	echo '{"success":false}';
}
unset($stmt);

?>