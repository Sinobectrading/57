<div class="footer">
	<nav class="navbar navbar-default" id="footernav">
		<div class="container-fluid">
				<!-- Collect the nav links, forms, and other content for toggling -->
			<div class=" " id="botnav">
				<ul class="nav navbar-nav">
					<li class="pull-left copyright">&copy; Copy Right 2016, All right reserved</li>
					<li class="hidden-xs"><a href="/llc/en_us/about.php">ABOUT</a></li>
			 
					<li class="hidden-xs"><a href="/en_us/privacy.php">PRIVACY</a></li>
					 <div class="visible-xs clearfix" id="footn">
					 	<ul class="visible-xs">
					 		<li class="fcenter"><a href="/llc/en_us/about.php">ABOUT US</a></li>
					 		
							<li class="fcenter"><a href="/llc/en_us/privacy.php">PRIVACY</a></li>
						</ul>
					 </div>
					<li class="pull-right social">
						<span>Tel : +1 561-409-2205</span>
				 		<!-- <a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a> -->
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</div>

<script type="text/javascript" src="/llc/source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="/llc/source/js/isotope.js"></script>
<script type="text/javascript" src="/llc/source/js/myscript.js"></script> 

<script type="text/javascript" src="/llc/source/js/jquery.stickit.min.js"></script> 
<script type="text/javascript" src="/llc/source/js/modernizr.custom.js"></script>



<script type="text/javascript" src="/llc/source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="/llc/source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>

<script src="/llc/source/js/imagesloaded.pkgd.min.js"></script>
<script src="/llc/source/js/anime.min.js"></script>
<script src="/llc/source/js/temp.js"></script>
<script src="/llc/source/js/jquery.showup.js"></script>

<script src="/llc/source/js/jquery.dataTables.min.js"></script>
<script src="/llc/source/js/dataTables.material.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
<script>
// array is also fine, equal to
$('.stick1').stickit([
{
  screenMinWidth: 1024,    // apply if width >= 1024
  top: 260,
  onStick: function () {
    $("#fade").fadeOut();
  }
}, 
{
  screenMinWidth: 768,    // apply if width >= 768 && width <= 1023
  screenMaxWidth: 1023,
  top: 300,
  onStick: function () {
    $("#fade").fadeOut();
  }
}, 
{
  screenMaxWidth: 767,    // apply if width <= 767
  top: 350,
  onStick: function () {
    $("#fade").fadeOut();
  }
}]); 
$(window).scroll( function() { 
 	var scrolled_val = $(document).scrollTop().valueOf();
 	if(scrolled_val < 100){
 		$("#fade").fadeIn();
 	}
});
</script>
