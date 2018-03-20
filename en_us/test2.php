<?php 
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
$obju = "abc@email.com";
$objp = "1111";

$select = $pdoconn->prepare("SELECT * FROM users WHERE email=:email");
$select->bindParam(':email',$obju, PDO::PARAM_STR); 
$select->execute();
$row = $select->fetch(PDO::FETCH_ASSOC);
if( password_verify($objp, $row['password']) ) {
    echo "Right";
}
else {
    echo "Wrong";
}
?>