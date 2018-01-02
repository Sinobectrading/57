 <?php  
 // session_start();
  header('Content-type: application/pdf');

  /*header("Content-Disposition: attachment; filename=".$file);*/
  header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
  header('Cache-Control: no-store, no-cache, must-revalidate');
  header('Cache-Control: pre-check=0, post-check=0, max-age=0');
  header('Pragma: anytextexeptno-cache', true);
  header('Cache-control: private');
  header('Expires: 0');

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

if(isset($_GET['file'])){
	$link = encrypt_decrypt('decrypt',$_GET['file']);
	$file = "../inv/".$link.".pdf";
	  header("Content-Disposition: attachment; filename=".$file);
      readfile($file);
}

 
?>