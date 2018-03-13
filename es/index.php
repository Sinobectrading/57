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
					<h2>METAL</h2>
					<p>El metal está en todas partes del mundo. </br> Los productos de metal que proporcionamos se pueden usar para variedades de campos.</p>
				</div>
			</div>
			<div class="item">
				<img src="../image/1080/b01.jpg" alt="porche">
				<div class="carousel-caption">
					<h2>ALUMINIO</h2>
						<p>Nuestras especialidades incluyen Ingots, billots <br>
						y productos de extrusión personalizados.</p>
				</div>
			</div>
			<div class="item">
				<img src="../image/1080/b03.jpg" alt="benz">
				<div class="carousel-caption">
					<h2>BARANDILLA</h2>
					<p>¿Necesita una barandilla para una terraza envolvente, un balcón, una escalera u otra característica en un hogar o negocio? </br> ¿Busca la elegante apariencia de hierro forjado sin las preocupaciones de mantenimiento?</p>
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
	<h1 class="text-center">NUESTROS PRODUCTOS</h1>
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
			<a href="standex.php">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
 					<img src="../image/700_774/004.jpg" alt="car1">
					<p>Standard Extrusion</p>	
 			</div>
			</a>
			
			<a href="aicasting.php">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
 					<img src="../image/700_774/021.png" alt="car1">
					<p>Aluminum Casting</p>	
 			</div>
			</a>

			<a href="customized.php">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
 					<img src="../image/700_774/001.jpg" alt="car1">
					<p>Customized Extrusion</p>	
 			</div>
		 	</a>

		 	<a href="coil.php">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
 					<img src="../image/700_774/007.jpg" alt="car1">
					<p>Aluminum Coil</p>	
 			</div>
			</a>

			<a href="plate.php"></a>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
 					<img src="../image/700_774/023.png" alt="car1">
					<p>Plates & Sheets</p>	
 			</div>

			<a href="treatplate.php">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
 					<img src="../image/700_774/024.jpg" alt="car1">
					<p>Tread Plates</p>	
 			</div>	
 			</a> 	
		</div>
	</div>
<!-- _______________________________News Letter ____________________-->
	<div class="newslettercontent flex hidden-xs">
		<div class="leftside" id="brochure">
			<img src="../image/border.png" alt="border">
			<h1>Folleto</h1>
			<p>Vea o descargue nuestro folleto de la compañía para ver nuestra amplia gama de productos y servicios. </p>
		</div>
		<div class="rightside">
			<img class="newsimage" src="../image/brochure.jpg" alt="newsletter">
			<!-- <input type="text" class="form-control" id="subemail" placeholder="EMAIL"> -->
			<button id="broc">Descargar</button>
		</div>
	</div>
	<div class="newslettercontent visible-xs">
		<div class="leftside" id="brochure">
			<img src="../image/border.png" alt="border">
			<h1>Folleto</h1>
			<p>Vea o descargue nuestro folleto de la compañía para ver nuestra amplia gama de productos y servicios.  </p>
		</div>
		<div class="rightside">
			<img class="newsimage" src="../image/brochure.jpg" alt="newsletter">
			<!-- <input type="text" class="form-control" id="subemail" placeholder="EMAIL"> -->

			<button id="broc">Descargar</button>
		</div>
	</div>
</div>


	<!-- ______________________________________________________Bottom Menu ______________________________-->
	<div class="bottommenu">
		<p>"Ofrecemos productos de válvulas de aluminio para renovación interna, construcción, residencial, equipamiento médico e industria alimentaria."</p>
		 <img src="../image/line.png" alt="line"> <br>
	</div>	 
<?php include_once 'footer.php'; ?>

</body>
</html>