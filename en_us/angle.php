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
						<img src="../image/750_500/003.png" alt="angle"  >
					</div>
					<div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 clearfix productinside">
						<div class="col-md-12 propath">
						 	<h3><a href="products.php">PRODUCTS </a><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="http://sinometalinc.com/llc/en_us/products.php#extrusion">EXTRUSION </a><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> ALGLE</h3>	
				 		</div>
				 		<div class="subc">
				 			<p class="bold">Available Shape</p>
				 			<ul>
 								<li><a href="#AngleSharpCorner">Angle Sharp Corner</a></li>
								<li><a href="#AngleRadiusInside">Angle Radius Inside</a></li>
 							</ul>
				 		</div>
 						
 						<div class="minc">
							<p class="bold">Available Alloy 
									<p class="alloy">6060-T5, 6061-T6, 6061-T6511, 6063-T52, 6063-T66
									</p>
									<p>6061 angle has rounded corners and is generally used for structural applications where strength is important. 
									<p>
									<p>
									6063 angle has sharp corners and is generally used where surface finish is more important than strength. 
									</p>
							</p>
						</div>
						
						<!-- <p><span>Alloy & Temp</span><span>6063-T52  6006-T5</span></p>
						<p><span>Finish</span><span>Mill Finish, Powder Coating ( black / white )</span></p>
						<p><span>Length</span><span>240"</span></p> -->
 					</div>
				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2 rightcnt">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-12 col-md-3 slideimg stick1">
						<img src="../image/thumbnail/AngleSharpCorner.jpg" alt="angle">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9">
						<div class="featurecontant clearfix">
							<div id="AngleSharpCorner">
								 
			 				</div>
 						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2 rightcnt">
				<div class="row costumrow">
					<div class="col-xs-12 col-md-3 slideimg stick1">
						<img src="../image/thumbnail/AngleRadiusInside.jpg" alt="tube">
					</div>
					<div class="col-xs-12 col-md-9">
						<div class="featurecontant">
							<div id="AngleRadiusInside" name="AngleRadiusInside">
								 
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