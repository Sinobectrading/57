<?php 
function filterName($field){
	// Sanitize user name
	$field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    // Validate user name
	if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z0-9-_]+$/")))){
		return $field;
	}
	else{
		return FALSE;
	}
}   

function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'QSD~]]]]This is my secret key';
    $secret_iv = 'This is my secret ";sadjjkkck_-s00230)()(WQ(9sa0s9((" iv';
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
?>