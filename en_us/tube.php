<?php session_start(); ?>
<!doctype html>
<html>
<?php include_once '../header.php'; ?>
<body>
<!-- Header -->
<?php include_once 'nav.php'; ?>

<div class="allcontain" id="a1">

	<div class="feturedimage">
		<div class="row firstrow">

			<div class="col-lg-12 costumcol colborder2">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-5 col-md-7 col-lg-7 slideimg" id="topimg">
						<img src="../image/750_500/000.png" alt="tube"  >
					</div>
					<div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 clearfix productinside">
						<div class="col-md-12 propath">
						 	<h3><a href="products.php">PRODUCTS </a><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="http://sinometalinc.com/llc/en_us/products.php#extrusion">EXTRUSION </a><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> TUBE</h3>	
				 		</div>
						
						<div class="subc">
				 			<p class="bold">Available Shape</p>
				 			<ul>
								<li><a href="#RectangularTubeSharpCorner">Rectangular TubeSharp Corner</a></li>
								<li><a href="#RectangularTubeRoundCorner">Rectangular TubeRound Corner</a></li>
								<li><a href="#RoundTubing">Round Tubing</a></li>
							</ul>
				 		</div>

						<div class="minc">
							<p class="bold">Available Alloy 
								<p class="alloy">5356-T5, 6060-T5, 6061-T6, 6061-T6511, 6063-T5, 6063-T52, 6063-T66</p>
								<p>Aluminum Round Tubes are available in alloys 6061, 6063. Aluminum 6061 is the most widely used alloy, offering better corrosion resistance and weldability than other Aluminum Round Tube, but less strength. Alloy 6063 offers high corrosion resistance and is commonly used for outdoor structural applications such as Aluminum Tube railings and trims.
								</p>
							</p>
						
						<!-- <p><span>Alloy & Temp</span><span>6063-T52  6006-T5</span></p>
						<p><span>Finish</span><span>Mill Finish, Powder Coating ( black / white )</span></p>
						<p><span>Length</span><span>240"</span></p> -->
						</div>
 					</div>
				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2 rightcnt">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-12 col-md-3 slideimg stick1">
						<img src="../image/thumbnail/RectangularTubeSharpCorner.jpg" alt="tube">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9">
						<div class="featurecontant clearfix">
							<div id="RectangularTubeSharpCorner">
								 
			 				</div>
 						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2 rightcnt">
				<div class="row costumrow">
					<div class="col-xs-12 col-md-3 slideimg stick1">
						<img src="../image/thumbnail/RectangularTubeRoundCorner.jpg" alt="tube">
					</div>
					<div class="col-xs-12 col-md-9">
						<div class="featurecontant">
							<div id="RectangularTubeRoundCorner">
								 
			 				</div>
 						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2 rightcnt">
				<div class="row costumrow">
					<div class="col-xs-12 col-md-3 slideimg stick1">
						<img src="../image/thumbnail/RoundTubing.jpg" alt="tube">
					</div>
					<div class="col-xs-12 col-md-9">
						<div class="featurecontant">
							<div id="RoundTubing">
								 
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
$(document).ready(function(){
	$('.featurecontant').showup(function(){
		var str = $(this).children().attr('id');
		var url = str.replace(/\s/g, '');
		$.ajax({
	    		context: this,
	    		dataType : "html",
	    		url : "products/"+url+".html",
	    		success : function(results) {
	          	$(this).children().html(results);
	          	// var header = $("#container thead").html();
	          	// $("<tfoot>"+header+"</tfoot>").insertBefore("#container tbody");
	    		},
	    		complete: function(){
	    			
	    		}
		});
	});
});

$(window).on('resize', function(){
	var tablewidth = $('table.dataTable').parent().attr('width');
	$('table.dataTable').width(tablewidth);
});
</script>
</body>
</html>