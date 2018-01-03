<?php
// session_start();
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 


include_once 'db.php';	
include_once 'func.php';
 
if ( isset($_POST["cidname"]) && isset($_POST["password"]) &&  isset($_POST["ponumber"]) ) {
 
		 	 echo '{"success":true,"size":"1111","result":"2222"}';
 
}	
?>