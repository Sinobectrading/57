<!doctype html>
<html>
<?php include_once '../header.php'; ?>
<style>
html{
    min-height:100%;/* make sure it is at least as tall as the viewport */
    position:relative;
}
body{
    height:100%; /* force the BODY element to match the height of the HTML element */
}
#rehash {
	margin-top: 25vh;
	height: 65vh
}
</style>
<body>

<!-- Header -->
<?php include_once 'nav.php'; ?>
 
<div class="allcontain">
    <div class="container">
        <div class="row">
            <div id="rehash" class="col-md-12">
 
                <h1>Rehash</h1>
                 <form class="form-inline" action="#" method="post" id="form-login" action="rehash.php">
                    <span class="input input--nao">
                        <input class="input__field input__field--nao valid" type="email" id="email" name="email"/>
                        <label class="input__label input__label--nao" for="email">
                            <span class="input__label-content input__label-content--nao">Customer Email</span>
                        </label>
                        <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                        </svg>
                    </span>
                    <span class="input input--nao"><button class="btn btn-primary" id="track" name="track">Hash</button></span>
                 </form>
                     
            </div>
      	</div>
    </div><!-- /map-outer -->
</div> <!-- /row -->
 
<?php include_once 'footer.php'; ?>
<script>
$(document).ready(function() {

  $(".toggle-accordion").on("click", function() {
    var accordionId = $(this).attr("accordion-id"),
      numPanelOpen = $(accordionId + ' .collapse.in').length;
    
    $(this).toggleClass("active");

    if (numPanelOpen == 0) {
      openAllPanels(accordionId);
    } else {
      closeAllPanels(accordionId);
    }
  })

  // openAllPanels = function(aId) {
  //   console.log("setAllPanelOpen");
  //   $(aId + ' .panel-collapse:not(".in")').collapse('show');
  // }
  // closeAllPanels = function(aId) {
  //   console.log("setAllPanelclose");
  //   $(aId + ' .panel-collapse.in').collapse('hide');
  // }
     
});
</script>
<?php 
function hashPW($userpw){
    return password_hash($userpw, PASSWORD_DEFAULT, ['cost' => 12]);
}


function updatePw($userEmail){
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

  $querypost = "UPDATE users SET password=:password WHERE email=:email";

  $stmtpost = $pdoconn->prepare($querypost);
  $stmtpost->bindParam(':password', $password, PDO::PARAM_STR);
  $stmtpost->bindParam(':email', $email, PDO::PARAM_STR);
          
          $stmtget = $pdoconn->prepare("SELECT * FROM users WHERE email=:email");
          $stmtget->bindParam(':email',$email, PDO::PARAM_STR);
  
          $email = $userEmail;
          $stmtget->execute();
          $row = $stmtget->fetch(PDO::FETCH_ASSOC);

          $password = hashPW($row['password']);
          $stmtpost->execute();
}

$customerEmail = $_POST["email"];
updatePw($customerEmail);
?>
</body>
</html>