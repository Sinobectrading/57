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
						<img src="../image/750_500/004.png" alt="angle"  >
					</div>
					<div class="col-xs-12 col-sm-7 col-md-5 col-lg-5 clearfix productinside">
						<div class="col-md-12 propath">
						 	<h3><a href="products.php">PRODUCTS </a><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="http://sinometalinc.com/llc/en_us/products.php#extrusion">EXTRUSION </a><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> BAR</h3>	
				 		</div>
				 		<div class="subc">
				 			<p class="bold">Available Shape</p>
				 			<ul>
 								<li><a href="#BarSharpCorner">Bar Sharp Corner</a></li>
								<li><a href="#BarRound">Bar Round Corner</a></li>
								<li><a href="#Rod">Bar Round</a></li>
 							</ul>
				 		</div>
 						
 						<div class="minc">
							<p class="bold">Available Alloy 
								<p class="alloy">1060, 6005A-T6, 6026-T6, 6060-T5, 6060-T66, 6061, 6061-T4, 6061-T6, 6061-T6511, 6063-T1, 6063-T5, 6063-T591, 6063-T6
								</p>
								<p>
									Aluminum Square Bar is availble in various alloys offering a range of weldability, corrosion resistance and machinability.   
									High strength aluminums can be used in aerospace applications, and high corrosion resistance aluminum alloys are commonly used in marine applications. 
								</p>
								<p>
									Aluminum Round Bar is availble in various alloys offering a range of weldability, corrosion resistance and machinability. High strength Aluminum Round Rod can be used in aerospace applications, and high corrosion resistance aluminum alloy round rods are commonly used in marine applications. 
								</p>
							</p>
						</div>
 					</div>
				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2 rightcnt">
				<div class="row costumrow">
					<div class="col-xs-12 col-sm-12 col-md-3 slideimg stick1">
						<img src="../image/thumbnail/BarSharpCorner.jpg" alt="angle">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-9">
						<div class="featurecontant clearfix">
							<div id="BarSharpCorner">
								 
			 				</div>
 						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12 costumcol colborder2 rightcnt">
				<div class="row costumrow">
					<div class="col-xs-12 col-md-3 slideimg stick1">
						<img src="../image/thumbnail/BarRound.jpg" alt="tube">
					</div>
					<div class="col-xs-12 col-md-9">
						<div class="featurecontant">
							<div id="BarRound">
								 
			 				</div>
 						</div>
					</div>
				</div>
			</div>

			 <div class="col-lg-12 costumcol colborder2 rightcnt">
				<div class="row costumrow">
					<div class="col-xs-12 col-md-3 slideimg stick1">
						<img src="../image/thumbnail/Rod.jpg" alt="tube">
					</div>
					<div class="col-xs-12 col-md-9">
						<div class="featurecontant">
							<div id="Rod">
								 
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