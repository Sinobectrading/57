<?php
// session_start();
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 


include_once 'db.php';	
include_once 'func.php';

if ( isset($_POST["cidvalue"]) && !isset($_POST["psvalue"]) && !isset($_POST["povalue"]) ) {
	$cid = strtolower(filterName($_POST["cidvalue"]));
	$querycid = "SELECT * FROM customer WHERE cid=:clientid";
		$stmtcid = $conn->prepare($querycid);
		$stmtcid->bindParam(':clientid', $cid, PDO::PARAM_STR);

		$stmtcid->execute();
		// $result = $stmt->fetchAll();
		if( $stmtcid->rowCount() > 0){
			echo '{"success":true, "message":""}';
		}
 
		if ( $stmtcid->rowCount() ==0 ) {
			echo '{"success":false,"message":"Customer ID does not exist!"}';
		} 
}


if (  isset($_POST["psvalue"]) && !isset($_POST["povalue"]) ) { // if input cid and password. CID exists
	$cid = strtolower(filterName($_POST["cidvalue"]));
	$password = $_POST["psvalue"];
	$queryps = "SELECT * FROM customer WHERE cid=:client";
	$stmtps = $conn->prepare($queryps);
	$stmtps->bindParam(':client', $cid, PDO::PARAM_STR);

	$stmtps->execute();
	$result=$stmtps->fetch(PDO::FETCH_ASSOC);

	$verify=password_verify($password,$result["password"]);
	

	if($verify) {
 		echo '{"success":true, "message":"Success!"}';
	}
	else{
		echo '{"success":false, "message":"Password error"}';
	}
}

 
if ( isset($_POST["cidname"]) && isset($_POST["password"]) &&  isset($_POST["ponumber"]) ) {
	// $value = strtolower(filterName($_POST["povalue"]));
	// echo '{"success":true,"message":'.$value.'}';
	$pose = strtolower(filterName($_POST["ponumber"]));
	$cidse = strtolower(filterName($_POST["cidname"]));
	$passwordse = $_POST["password"];

	$queryps = "SELECT * FROM customer WHERE cid=:client";

	$stmtps = $conn->prepare($queryps);
	$stmtps->bindParam(':client', $cidse, PDO::PARAM_STR);
	$stmtps->execute();

	$resultpassword = $stmtps->fetch(PDO::FETCH_ASSOC);
	$verifypassword = password_verify($passwordse , $resultpassword["password"]);
		

		if($verifypassword) {
	 		$querypo = "SELECT * FROM po WHERE ag=:ponumber and cid=:cid";
			$stmtpo = $conn->prepare($querypo);
			$stmtpo->bindParam(':ponumber', $pose, PDO::PARAM_STR);
			$stmtpo->bindParam(':cid', $cidse, PDO::PARAM_STR);

			$stmtpo->execute();
	
 			print_r($resultse);

				if( $stmtpo->rowCount() > 0){ //if get PO number
					$size = $stmtpo->rowCount();
					$resultse = $stmtpo->fetchAll(PDO::FETCH_ASSOC);
 					$response = json_encode($resultse);
	 	 				echo '{"success":true,"size":'.$size.',"result":'.$response.'}';
				}
	 
				if ( $stmtpo->rowCount() ==0 ) { //if no PO
					echo '{"success":false,"message":"PO number invalid!"}';
				} 
		}
		else {
			echo '{"success":false,"message":"Password error!"}';
		}
}	
?>