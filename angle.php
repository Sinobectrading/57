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
					<div class="col-xs-12 col-sm-5 col-md-7 col-lg-7 slideimg" id="topimg">
						<img src="image/900.jpg" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 clearfix productinside">
						<div class="col-md-12 propath">
						 	<h3> PRODUCTS  > <a href="aluminum.php">STAND EX</a> >> <a href="">ALGLE</a></h3>	
				 		</div>
						<h1>ALGLE</h1>
						<p><span>Alloy & Temp</span><span>6063-T52  6006-T5</span></p>
						<p><span>Finish</span><span>Mill Finish, Powder Coating ( black / white )</span></p>
						<p><span>Length</span><span>240"</span></p>
 					</div>


				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2" id="cntd">
				<div class="row costumrow">

					<div class="col-xs-12 col-sm-5 col-md-7 col-lg-7 slideimg">
						<img src="image/900.jpg" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 stick1" id="stick1">
						<div class="featurecontant">
    						<div class="sticky">
  								<h1>Profile 01</h1>
								<p><span>FOOT 1</span><span>1</span></p>
								<p><span>FOOT 2</span><span>1</span></p>
								<p><span>THICKNESS</span><span>0.125"</span></p>
  							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2">
				<div class="row costumrow">

					<div class="col-xs-12 col-sm-5 col-md-7 col-lg-7 slideimg">
						<img src="image/900.jpg" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 stick1">
						<div class="featurecontant">
							<div>
								<h1>Profile 01</h1>
								<p><span>FOOT 1</span><span>4</span></p>
								<p><span>FOOT 2</span><span>2</span></p>
								<p><span>THICKNESS</span><span>0.125"</span></p>
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
		top:270
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