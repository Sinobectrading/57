<!doctype html>
<html>
<?php include_once '../header.php'; ?>
<style>
html{
    min-height:100%;/* make sure it is at least as tall as the viewport */
    position:relative;
}
body{
    height:100%; /* force the BODY element to match the height of the HTML element */
}
#contact {
	height: 900px
}

</style>
<body>

<!-- Header -->
<?php include_once 'nav.php'; ?>
 
<div class="allcontain">
	<div class="container">
		<div class="row">
			<div id="map-outer" class="col-md-12">
				<div id="address" class="col-md-4">
					<h1>Our Location</h1>
					<address class="col-md-12 col-sm-6 col-xs-12">
						<strong>SINOMETAL RESOURCES INC.</strong><br>
						Dorsoduro, 701-704<br>
						30123<br>
						Venezia<br>
						Italia<br>
						<abbr>P:</abbr> +39 041 240 5411<br>
						<abbr>Email:</abbr> wqd@sww.com
					</address>
					<address class="col-md-12 col-sm-6 col-xs-12">
						<strong>OPENING HOURS:</strong><br>
						<abbr>Monday:</abbr>9:00 ~ 17:00<br>
						<abbr>Monday:</abbr>9:00 ~ 17:00<br>
						<abbr>Monday:</abbr>9:00 ~ 17:00<br>
						<abbr>Monday:</abbr>9:00 ~ 17:00<br>
						<abbr>Monday:</abbr>9:00 ~ 17:00<br>
						<abbr>Monday:</abbr>9:00 ~ 17:00<br>
						<abbr>Monday:</abbr>9:00 ~ 17:00<br>
					</address>
				</div>
				<div id="map" class="col-md-8 col-xs-12"></div>
			</div><!-- /map-outer -->
		</div> <!-- /row -->


	</div><!-- /container -->	 
</div>
  
<?php include_once 'footer.php'; ?>
 <script>
      function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 26.396011, lng: -80.0794893},  
          zoom: 12,
          styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
        });
      }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAb41e6KKYlbNzFtOEPXDIwSO4pmNEyB8g&callback=initMap"
    async defer></script>
</body>
</html>