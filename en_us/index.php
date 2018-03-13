<!doctype html>
<html>
<?php include_once '../header.php'; ?>
<body>
<!-- Header -->
<?php include_once 'nav.php'; ?>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carousel-up" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-up" data-slide-to="1"></li>
		    <li data-target="#carousel-up" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="../image/1080/b02.jpg" alt="oldcar">
				<div class="carousel-caption">
					<h2>METAL</h2>
					<p>Metal is everywhere in the world.</br>The metal products we provide can be used for varieties of fields.</p>
				</div>
			</div>
			<div class="item">
				<img src="../image/1080/b01.jpg" alt="porche">
				<div class="carousel-caption">
					<h2 style="color:#9e9e9e ">EXTRUSION</h2>
						<p>High precision extrusions are derived from our 17-year experience and advanced equipment<br>
						We can provide according to your size and shape of such aluminum profile</p>
				</div>
			</div>
			<div class="item">
				<img src="../image/1080/b03.jpg" alt="benz">
				<div class="carousel-caption">
					<h2>PLATES & SHEETS</h2>
					<p>Highest quality Aluminium Plate / Aluminum Sheet<br>
					Standard export packing or following customer's demand</br></p>
				</div>
			</div>
		</div>
		<!-- <a class="left carousel-control" href="#carousel-up" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-up" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		</a> -->
	</div>
</div>
<!-- ____________________Featured Section ______________________________--> 
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center"> O U R<span class="carstxt">F E A T U R E S</span></h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow"  id="featuresection">
			<div class="col-lg-6 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="../image/600x700/006.jpg" alt="porsche">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Our Vision</h1>
							<p><!-- "Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt  --></p>
			 				<h2>Innovation</h2>
			 				<button id="btnRM" onClick="rmtxt()">READ MORE</button>
			 				<div id="readmore">
			 						<h1>Efficiency & Accurate</h1>
			 						<p>We are beyond traditional distributor, but frontier explore in term of operation model and technology.
			 						</p>
			 						<button id="btnRL">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 costumcol colborder2">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
						<img src="../image/600x700/004.jpg" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Our Value</h1>
							<p></p>
			 				<h2>Integration</h2>
			 				<button id="btnRM2">READ MORE</button>
			 				<div id="readmore2">
			 						<h1>Connection</h1>
			 						<p>We see ourselves as the major media to integration of upstream and downstream of our industry.</p>
			 						<button id="btnRL2">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="../image/600x700/003.jpg" alt="porsche">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Our business Goal </h1>
							
			 				<h2>Value Creation</h2>
			 				<button id="btnRM3" onClick="rmtxt()">READ MORE</button>
			 				<div id="readmore3">
			 						<h1>Value Creation</h1>
			 						<p>We are continuing streamline our internal operation system.
			 						</p>
			 						<button id="btnRL3">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 costumcol colborder2">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
						<img src="../image/600x700/005.jpg" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Our Business Strategy</h1>
			 				<h2>Win-Win Solution</h2>
			 				<button id="btnRM4">READ MORE</button>
			 				<div id="readmore4">
			 						<h1>Win-Win Solution</h1>
			 						<p>Create win-win relationship with clients and vendors.<br>
			 						</p>
			 						<button id="btnRL4">READ LESS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- ________________________LATEST CARS SECTION _______________________-->
<div class="latestcars">
	<h1 class="text-center">OUR PRODUCTS</h1>
	<!-- <ul class="nav nav-tabs navbar-left latest-navleft">
		<li role="presentation" class="li-sortby"><span class="sortby">SORT BY: </span></li>
		<li data-filter=".RECENT" role="presentation"><a href="#mostrecent" class="prcBtnR">MOST RECENT </a></li>
		<li data-filter=".POPULAR" role="presentation"><a href="#mostpopular" class="prcBtnR">MOST POPULAR </a></li>
		<li role="presentation"><a href="#" class="alphSort">ALPHABETICAL </a></li>
		<li data-filter=".HPRICE" role="presentation"><a href="#" class="prcBtnH">HIGHEST PRICE </a></li>
		<li data-filter=".LPRICE" role="presentation"><a href="#" class="prcBtnL">LOWEST  PRICE </a></li>
		<li id="hideonmobile">
	</ul> -->
</div>

<!-- ________________________Products Section________________-->
	<div class="clearfix" id="lastproject">
		<div class="row">
			<a href="standex.php">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
 					<img src="../image/700_774/700_774_002.jpg" alt="car1">
					<p>Aluminum Extrusion</p>	
 			</div>
			</a>
			
			<a href="aicasting.php">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
 					<img src="../image/700_774/700_773_001.jpg" alt="car1">
					<p>Aluminum Flat Rolled</p>	
 			</div>
			</a>

			<a href="customized.php">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
 					<img src="../image/700_774/700_774_003.jpg" alt="car1">
					<p>Aluminum Casting</p>	
 			</div>
		 	</a>

		 	 
		</div>
	</div>
<!-- _______________________________News Letter ____________________-->
	<div class="newslettercontent flex hidden-xs">
		<div class="leftside" id="brochure">
			<img src="../image/border.png" alt="border">
			<h1>Brochure</h1>
			<p>View or download our company brochure to see our comprehensive range of products and services. </p>
		</div>
		<div class="rightside">
			<img class="newsimage" src="../image/brochure.jpg" alt="newsletter">
			<!-- <input type="text" class="form-control" id="subemail" placeholder="EMAIL"> -->
			<button id="broc">Download</button>
		</div>
	</div>
	<div class="newslettercontent visible-xs">
		<div class="leftside" id="brochure">
			<img src="../image/border.png" alt="border">
			<h1>Brochure</h1>
			<p>View or download our company brochure to see our comprehensive range of products and services.  </p>
		</div>
		<div class="rightside">
			<img class="newsimage" src="../image/brochure.jpg" alt="newsletter">
			<!-- <input type="text" class="form-control" id="subemail" placeholder="EMAIL"> -->

			<button id="broc">Download</button>
		</div>
	</div>
</div>


	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<p>"We offering aluminum valve products for Internal Renovation, Construction, Residential, Medical Equipment and Food Industry."</p>
		 <img src="../image/line.png" alt="line"> <br>
	</div>	 
<?php include_once 'footer.php'; ?>
<script>
function downloadAll(files){  
    if(files.length == 0) return;  
    file = files.pop();  
    var theAnchor = $('<a />')  
        .attr('href', file[1])  
        .attr('download',file[0]);  
    theAnchor[0].click();   
    theAnchor.remove();  
    downloadAll(files);  
}  
$("#broc").click(function(){
	downloadAll([  
    ['../LLC.pdf', 'data:text/pdf;charset=utf8,'+  
                  encodeURIComponent('pdf,file\and,so,on')] 
	]);
});
  
</script>
</body>
</html>