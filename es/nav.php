<div class="allcontain">
	<div class="header">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navtop">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>    
				<span class="visible-xs"><a href="/en_us/<?php echo basename($_SERVER['PHP_SELF']); ?>" class="register">EN</a> <a href="/es/<?php echo basename($_SERVER['PHP_SELF']); ?>" class="currentlg">ES</a></span>
				<a class="navbar-brand" href="/es/index.php">					

					<img src="../image/triangle30.png" alt=""></br class="visible-xs">SINOBEC RESOURCES LLC
					<p class="navtitle hidden-xs">Ya que 2002</p>
				</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li
						<?php if (trim($_SERVER['PHP_SELF']) == "/es/index.php") {
                              echo 'class="active"';} ?> 
					>
						<a href="index.php" class="element underline-opening">CASA</a> 
					</li>
					
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTS<span class="caret"></span></a>
						<ul class="dropdown-menu dropdowncostume">
							<li><a href="aluminum.php">Aluminum</a></li>
							<li><a href="#">Steel</a></li>
							<li><a href="3">railing</a></li>
						</ul>
					</li> -->
					<li
							<?php if (trim($_SERVER['PHP_SELF']) == "/es/products.php") {
                              echo 'class="active"';} ?> 
					>
						<a href="products.php" class="element underline-opening">PRODUCTOS & SERVICIO</a>
					</li>
					<li
						<?php if (trim($_SERVER['PHP_SELF']) == "/es/track.php") {
                              echo 'class="active"';} ?> 
					>
						<a href="track.php" class="element underline-opening">ORDEN DE PISTA</a>
					</li>

					<li
						<?php if (trim($_SERVER['PHP_SELF']) == "/es/contact.php") {
                              echo 'class="active"';} ?> 
					>
						<a href="contact.php" class="element underline-opening">CONTACTO</a>
					</li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right hidden-xs">
					<li><a href="/en_us/<?php echo basename($_SERVER['PHP_SELF']); ?>"><span class="register element underline-opening">EN</span></a> </li>
					<li><a href="/es/<?php echo basename($_SERVER['PHP_SELF']); ?>"><span class="currentlg element underline-opening">ES</span></a></li>
				</ul>
				 
			</div>
		</nav>
		
<!-- ============= nav =============== -->
		 
	</div>
</div>