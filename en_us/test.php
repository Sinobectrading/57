<?php
include_once 'db.php';	
include_once 'func.php';


$pose = "8070004970";
$cidse = "000001";
$passwordse = "1111";

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