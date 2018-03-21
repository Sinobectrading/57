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
						<img src="../image/750_500/005.png" alt="angle"  >
					</div>
					<div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 clearfix productinside">
						<div class="col-md-12 propath">
						 	<h3><a href="products.php">PRODUCTS </a><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="http://sinometalinc.com/llc/en_us/products.php#extrusion">EXTRUSION </a><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> PIPE</h3>	
				 		</div>
				 		<div class="subc">
				 			<p class="bold"> </p>
				 			<!-- <ul>
 								<li><a href="#Pipe">PIPE</a></li>
 								<li><a href="#Rod">ROUND BAR</a></li>
								<li><a href="#Rod">ROD</a></li>
 							</ul> -->
				 		</div>
 						
 						<div class="minc">
							<p class="bold">Available Alloy 
								<p class="alloy">6061-T6, 6061-T6511, 6063-T4, 6063-T52</p>
								<p>
									Aluminum pipe is a tubular extruded product with outside diameter (OD) and wall thickness (WT) measurements that must conform to set sizes. The standard measurements follow the format used for steel pipe specifying the OD and WT. For example, pipe noted as 1-1/2” schedule 40 has an OD of 1-1/2” and WT that meets Schedule 40 standards. The higher the schedule number, the thicker the wall.  
								</p>
							</p>
						</div>
 					</div>
				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2 rightcnt">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-12 col-md-3 slideimg stick1">
						<img src="../image/thumbnail/Pipe.jpg" alt="angle">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9">
						<div class="featurecontant clearfix">
							<div id="Pipe">
								 
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