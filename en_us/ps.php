<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 

include 'db.php';	
include_once 'func.php';

	$queryps = "SELECT * FROM customer WHERE cid=:clientid AND ps=:password";
		$stmtps = $conn->prepare($querycid);
		$stmtps->bindParam(':clientid', $cid, PDO::PARAM_STR);
		$stmtps->bindParam(':password', $ps, PDO::PARAM_STR);

	if (isset($_POST["psvalue"])) {
		$cid = strtolower(filterName($_POST["cidvalue"]));
		$ps = $_POST["psvalue"];
	}

	$stmtcid->execute();
	$row = $stmtcid->fetch(PDO::FETCH_ASSOC);

	// $result = $stmt->fetchAll();
	if( $stmtps->rowCount() > 0){
		$verify = password_verify($ps, $stmtps['password']);
		if ($verify) {
		 	echo '{"success":true, "message":""}';
		 } 
		
	}
 
	if ( $stmtcid->rowCount() ==0 ) {
		echo '{"success":false,"message":"Password wrong!"}';
	} 
 	
?>