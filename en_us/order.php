<?php session_start(); ?>
<!doctype html>
<html>
<?php include_once '../header.php'; ?>
<link rel="stylesheet" href="../style/login.css">
<body>

<!-- Header -->
<?php 
	include_once 'nav.php';  
	if( !isset($_SESSION["user"]) ) { 
?>

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-90 p-b-30">
			<form class="login100-form validate-form" method="post" action="inventory.php" id="loginform">
				<span class="login100-form-title p-b-40">
					You aren't login yet.
				</span>

			 

				<div class="text-center p-t-55 p-b-30">
					<span class="txt1">
						LOGIN
					</span>
				</div>

				<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
					<input class="input100" type="text" id="email" name="email" placeholder="Email address">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate = "Please enter password">
					<span class="btn-show-pass">
						<i class="fa fa fa-eye"></i>
					</span>
					<input class="input100" type="password" id="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<span class="txt2 p-b-10">
						<a href="">Forget username / password?</a>
					</span>
					<button class="login100-form-btn" id="login" type="submit">
						Login
					</button>
				</div>
				
				<div class="flex-col-c p-t-224">
					<span class="txt2 p-b-10">
						Don’t have an account?
					</span>

					<a href="signup.php" class="txt3 bo1 hov1">
						Sign up now
					</a>
				</div>
				
			</form>
		</div>
	</div>
</div>

<?php 
	}
	else {
		?>
<div id="orderList">
 	<h2>Order List</h2>
</div>
<?php
	} 
	include_once 'footer.php'; 
	?>
<script>
(function ($) {
    "use strict";

    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('fa-eye');
            $(this).find('i').addClass('fa-eye-slash');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').removeClass('fa-eye-slash');
            $(this).find('i').addClass('fa-eye');
            showPass = 0;
        }
        
    });

})(jQuery);
</script>


<script>
$("#login").attr("disabled", true);


$("#email").on({
	focus: function(){
        $("#email").empty();
        $("#email").parent().removeClass('validated');
        $("#password").parent().removeClass('validated');
     },
     change: function(){
     	$("#login").attr("disabled", true);
     },
});


$("#email").on({
	focus: function(){
        $("#email").val("");
        $("#email").prop({"placeholder":"Email address"});
     },
     change: function(){
     	$("#login").attr("disabled", true);
     	// $("#email").prop({"value":""});
     },
	blur: function(){
 	  	$.ajax({
			type: "POST",
			url:"verifyEmail.php",
			dataType: "json",
			data: {
				email:$("#email").val()
				},
			success: function(dataN){ 
					if (dataN.success) {  
						$("#email").prop({"placeholder":dataN.message});
						$("#email").parent().removeClass('alert-validate');
						$("#email").parent().addClass('validated');
						console.log("removeattr");
					}	
					else {
						// $("#email").focus();
						$("#email").parent().removeClass('validated');
						$("#email").parent().addClass('alert-validate');
						$("#email").parent().attr("data-validate","Email not valid");
						console.log("wrong email");
						// $("#email").prop({"value":"","placeholder":dataN.message});
					}		
			},
			error:function(jrXHR){
				 console.log("Wrong");
			}
	 	});
	 },
});

$("#password").on({
	keyup: function(){ 
	 	$.ajax({
			type: "POST",
			url:"verifyPS.php",
			dataType: "json",
			data: {
				email: $("#email").val(),
				password: $("#password").val()
			},
			success: function(dataE){  
				if (dataE.success) {
					$("#password").parent().removeClass('alert-validate');
					$("#login").attr("disabled", false);
					$("#password").parent().addClass('validated');
					console.log("RightPS");
				}	
				else {
					$("#password").parent().addClass('alert-validate');
					$("#password").parent().removeClass('validated');
					$("#password").parent().attr("data-validate","Password not valid"); 
					console.log("WrongPS");
				}		
			},
			error:function(jrXHR){
				console.log("ErrorPS");
			},
		});
	},	
});



$("#login").on({
	click: function(){
		window.location.reload(true)
		return false;
	}
});
</script>
</body>
</html>	