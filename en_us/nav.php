<div class="allcontain">
	<div class="header">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navtop">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>    
				<span class="visible-xs"><a  class="currentlg" href="/057/en_us/<?php echo basename($_SERVER['PHP_SELF']); ?>">EN</a> <a href="/057/es/<?php echo basename($_SERVER['PHP_SELF']); ?>"  class="register">ES</a></span>
				<a class="navbar-brand" href="/057/en_us/index.php">					

					<img src="../image/triangle30.png" alt=""></br class="visible-xs">SINOBEC RESOURCES INC.
					<p class="navtitle hidden-xs">Since 2002</p>
				</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left">
					<li
						<?php if (trim($_SERVER['PHP_SELF']) == "/057/en_us/index.php") {
                              echo 'class="active"';} ?> 
					>
						<a href="index.php" class="element underline-opening">HOME</a> 
					</li>
					<li
						<?php if (trim($_SERVER['PHP_SELF']) == "/057/en_us/products.php") {
                              echo 'class="active"';} ?> 
					>
						<a href="products.php" class="element underline-opening">PRODUCTS & SERVICES</a>
					</li>
					<li
						<?php if (trim($_SERVER['PHP_SELF']) == "/057/en_us/track.php") {
                              echo 'class="active"';} ?> 
					>
						<a href="track.php" class="element underline-opening">TRACK ORDER</a>
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
						<?php if (trim($_SERVER['PHP_SELF']) == "/057/en_us/contact.php") {
                              echo 'class="active"';} ?> 
					>
						<a href="contact.php" class="element underline-opening">CONTACT</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right hidden-xs">
					<li><a href="/057/en_us/<?php echo basename($_SERVER['PHP_SELF']); ?>"><span class="currentlg element underline-opening">EN</span></a> </li>
					<li><a href="/057/es/<?php echo basename($_SERVER['PHP_SELF']); ?>"><span class="register element underline-opening">ES</span></a></li>
				</ul>
				 
			</div>
		</nav>
		
<!-- ============= nav =============== -->
		 
	</div>
</div>