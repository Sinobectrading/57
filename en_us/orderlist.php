<?php session_start(); ?>
<!doctype html>
<html>
<?php include_once '../header.php'; ?>
<link rel="stylesheet" href="../style/login.css">
<body>

<!-- Header -->
<?php include_once 'nav.php'; if( isset($_SESSION["user"]) ) {?>
<div id="orderList">
 <h2>Order</h2>
</div>
<?php } include_once 'footer.php'; ?>
 
</body>
</html>	