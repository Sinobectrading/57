<?php 
require_once 'db.php';
function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret|||+';
    $secret_iv = 'This is my secret iv===';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}
 


$queryupd = "UPDATE po SET invoice=:newinvoice WHERE id=:id";

  $stmtupd = $conn->prepare($queryupd);
  $stmtupd->bindParam(':newinvoice', $newinvoice, PDO::PARAM_STR);
  $stmtupd->bindParam(':id', $id, PDO::PARAM_STR);

 
  	$queryget = "SELECT * FROM po";
  	$stmt = $conn->prepare($queryget);
 	$stmt->execute();
 	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($row as $key => $value) {

      print_r($value["invoice"]);
      	$newinvoice = encrypt_decrypt('encrypt',$value['invoice']);
      	$id = $key+1;
      $stmtupd->execute();
    } 





// $queryupd = "UPDATE po SET invoice=:newinvoice WHERE ag=:pon";

//   $stmtupd = $conn->prepare($queryupd);
//   $stmtupd->bindParam(':newinvoice', $newinvoice, PDO::PARAM_STR);
//   $stmtupd->bindParam(':pon', $ponumber, PDO::PARAM_STR);

 
//   $queryget = "SELECT * FROM po WHERE ag=:ponumber";

//   $stmt = $conn->prepare($queryget);
//   $stmt->bindParam(':ponumber',$ponumber, PDO::PARAM_STR);

 
//   $ponumber = "8070004534";
//   $stmt->execute();
//   $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
//      foreach ($row as $key) {

//       print_r($key["invoice"]);
//       $newinvoice = encrypt_decrypt('encrypt',$key['invoice']);
       
//       $stmtupd->execute();
//     } 




 
  // $queryget = "SELECT * FROM po WHERE ag=:ponumber";

  // $stmt = $conn->prepare($queryget);
  // $stmt->bindParam(':ponumber',$ponumber, PDO::PARAM_STR);

 
  // $ponumber = "8070003433";
  // $stmt->execute();
  // $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
  //    foreach ($row as $key) {

  //      $invoice = encrypt_decrypt('decrypt',$key['invoice']);
  //      print_r($invoice);
  //   }

 

