<!doctype html>
<html>
<?php include_once 'header.php'; ?>
<body>
<!-- Header -->
<?php include_once 'nav.php'; ?>

<div class="allcontain" id="a1">

	<div class="feturedimage">
		<div class="row firstrow">
			 


			<div class="col-lg-12 costumcol colborder2">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 slideimg">
						<img src="image/900.jpg" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 clearfix productinside">
 							<h1>LOREM IPSUM 2</h1>
							<p>"Lorem ipsum dolor sit amet, consectetur  sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur 
		 					</p>
 					</div>


				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2" id="cntd">
				<div class="row costumrow">

					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 slideimg">
						<img src="image/900.jpg" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 stick1" id="stick1">
						<div class="featurecontant">
    						<div class="sticky">
  								<h1>LOREM IPSUM 2</h1>
  								<p>"Lorem ipsum dolor sit amet, consectetur , 
			 						sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur , 
			 						sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur ,  
			 					</p>
  							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2">
				<div class="row ">

					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 slideimg">
						<img src="image/900.jpg" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 stick1">
						<div class="featurecontant">
							<div>
								<h1>LOREM IPSUM 2</h1>
								<p>"Lorem ipsum dolor sit amet, consectetur , 
			 						sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur , 
			 						sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur ,  
			 					</p>
			 				</div>
 						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2">
				<div class="row costumrow">

					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 slideimg">
						<img src="image/900.jpg" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 stick1">
						<div class="featurecontant">
							<div>
								<h1>LOREM IPSUM 2</h1>
								<p>"Lorem ipsum dolor sit amet, consectetur , 
			 						sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur , 
			 						sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur ,   
			 					</p>
			 				</div>
 						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2">
				<div class="row costumrow">

					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 slideimg">
						<img src="image/900.jpg" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 stick1">
						<div class="featurecontant">
							<div>
								<h1>LOREM IPSUM 2</h1>
								<p>"Lorem ipsum dolor sit amet, consectetur , 
			 						sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur , 
			 						sed do eiusmod tempor incididunt Lorem ipsum dolor sit amet, consectetur ,  
			 					</p>
			 				</div>
 						</div>
					</div>

				</div>
			</div>


		</div>
	</div>
 
</div>

	 
	 
<?php include_once 'footer.php'; ?>
<script>
if($(window).width() >= 1365){
	$('.stick1').stickit({
		screenMinWidth: 768,
		top:350
		});
}
if( $(window).width() >= 768  &&  $(window).width() < 1365  ){
	$('.stick1').stickit({
		screenMinWidth: 768,
		top:245
		});
}
</script>
</body>
</html>