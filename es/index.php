<!doctype html>
<html>
<?php include_once '../header.php'; ?>
<body>
<!-- Header -->
<?php include_once 'nav.php'; ?>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="../image/1080/b02.jpg" alt="oldcar">
				<div class="carousel-caption">
					<h2>METAL 365</h2>
					<p>Lorem ipsum dolor sit amet, consectetur ,<br>
						sed do eiusmod tempor incididunt ut labore </p>
				</div>
			</div>
			<div class="item">
				<img src="../image/1080/b01.jpg" alt="porche">
				<div class="carousel-caption">
					<h2>ALUMINUM</h2>
						<p>Lorem ipsum dolor sit amet, consectetur ,<br>
						sed do eiusmod tempor incididunt ut labore </p>
				</div>
			</div>
			<div class="item">
				<img src="../image/1080/b03.jpg" alt="benz">
				<div class="carousel-caption">
					<h2>Car</h2>
					<p>Lorem ipsum dolor sit amet, consectetur ,<br>
						sed do eiusmod tempor incididunt ut labore </p>
				</div>
			</div>
		</div>
		 
	</div>
</div>
<!-- ____________________Featured Section ______________________________--> 
<div class="allcontain">
	<div class="feturedsection">
		<h1 class="text-center">N U E S T R A<span class="carstxt">C A R A C T E R I S T I C A S</span></h1>
	</div>
	<div class="feturedimage">
		<div class="row firstrow"  id="featuresection">
			<div class="col-lg-6 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="../image/312_390/01.png" alt="porsche">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Nuestra visión</h1>
							<p><!-- "Lorem ipsum dolor sit amet, consectetur ,<br>
			 						sed do eiusmod tempor incididunt  --></p>
			 				<h2>Innovación</h2>
			 				<button id="btnRM" onClick="rmtxt()">LEE MAS</button>
			 				<div id="readmore">
			 						<h1>Eficiencia & Precisión</h1>
			 						<p>Estamos más allá del distribuidor tradicional, pero exploramos la frontera en términos de modelo de operación y tecnología.
			 						</p>
			 						<button id="btnRL">LEER MENOS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 costumcol colborder2">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
						<img src="../image/312_390/01.png" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Nuestro Valor</h1>
							<p></p>
			 				<h2>Integración</h2>
			 				<button id="btnRM2">LEE MAS</button>
			 				<div id="readmore2">
			 						<h1>Conexión</h1>
			 						<p>Nos vemos a nosotros mismos como los principales medios para la integración de las fases iniciales y posteriores de nuestra industria.</p>
			 						<button id="btnRL2">LEER MENOS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 costumcol colborder1">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
						<img src="../image/312_390/01.png" alt="porsche">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Nuestro objetivo comercial</h1>
			 				<h2>Creación de valor</h2>
			 				<button id="btnRM3" onClick="rmtxt()">LEE MAS</button>
			 				<div id="readmore3">
			 						<h1>Creación de valor</h1>
			 						<p>Continuamos racionalizando nuestro sistema de operación interna.
			 						</p>
			 						<button id="btnRL3">LEER MENOS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 costumcol colborder2">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
						<img src="../image/312_390/01.png" alt="porsche1">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
						<div class="featurecontant">
							<h1>Nuestra estrategia empresarial</h1>
			 				<h2>Solución ganar-ganar</h2>
			 				<button id="btnRM4">LEE MAS</button>
			 				<div id="readmore4">
			 						<h1>Solución ganar-ganar</h1>
			 						<p>Crea una relación ganar-ganar con clientes y proveedores.</p>
			 						<button id="btnRL4">LEER MENOS</button>
			 				</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- ________________________LATEST CARS SECTION _______________________-->
<div class="latestcars">
	<h1 class="text-center">NUESTRO OBJETIVO</h1>
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

<!-- ________________________Latest Cars Image Thumbnail________________-->
	<div class="clearfix" id="lastproject">
		<div class="row">
			<a href="">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<img src="../image/338_389/01.png" alt="car1">
					<p>Project 1</p>	
				</div>
			</a>
			
			<a href="">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<img src="../image/338_389/01.png" alt="car1">
					<p>Project 1</p>	
				</div>
			</a>
			<a href="">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<img src="../image/338_389/01.png" alt="car1">
					<p>Project 1</p>	
				</div>
			</a>
			<a href="">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<img src="../image/338_389/01.png" alt="car1">
					<p>Project 1</p>	
				</div>
			</a>
			<a href="">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<img src="../image/338_389/01.png" alt="car1">
					<p>Project 1</p>	
				</div>
			</a>
			<a href="">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<img src="../image/338_389/01.png" alt="car1">
					<p>Project 1</p>	
				</div>
			</a>		 	
		</div>
	</div>
<!-- _______________________________News Letter ____________________-->
	<div class="newslettercontent">
		<div class="leftside">
			<img src="../image/border.png" alt="border">
			<h1>NEWSLETTER</h1>
			<p>Subscribe to the COLLECTIONCARS mailing list to <br>
				receive updates on new arrivals, special offers <br>
				and other discount information.</p>
		</div>
		<div class="rightside">
			<img class="newsimage" src="../image/newsletter.jpg" alt="newsletter">
			<input type="text" class="form-control" id="subemail" placeholder="EMAIL">
			<button>SUBSCRIBE</button>
		</div>
	</div>
</div>


	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<p>"Lorem ipsum dolor sit amet, consectetur,  sed do eiusmod tempor incididunt <br>
			eiusmod tempor incididunt"</p>
		 <img src="../image/line.png" alt="line"> <br>
	</div>	 
<?php include_once 'footer.php'; ?>

</body>
</html>