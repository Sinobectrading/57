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
					<h1>Nuestra Ubicación</h1>
					<address class="col-md-12 col-sm-6 col-xs-12">
            <strong>SINOBEC RESOURCES LLC</strong><br>
            Address: 5301 North Federal Highway Suite 210<br>    
            Boca Raton, Fl. 33487<br>
            USA<br>
            <abbr>P:</abbr> +1 561-409-2205<br>
            <abbr>Email:</abbr>randysinometalresources@gmail.com
          </address>
					<!-- <address class="col-md-12 col-sm-6 col-xs-12">
					<strong> HORAS DE APERTURA: </ strong> <br>
          <span><abbr> Lunes: </abbr></span> 9:00 ~ 17:00 <br>
          <span><abbr> Martes: </abbr></span> 9:00 ~ 17:00 <br>
          <span><abbr> Wendsday: </abbr></span> 9:00 ~ 17:00 <br>
          <span><abbr> jueves: </abbr></span> 9:00 ~ 17:00 <br>
          <span><abbr> Viernes: </abbr></span> 9:00 ~ 17:00 <br>
          <span><abbr> Sábado: </abbr></span> Cerrado <br>
          <span><abbr> Domingo: </abbr></span> Cerrado <br>
					</address> -->
				</div>
				<div id="map" class="col-md-8 col-xs-12"></div>
			</div><!-- /map-outer -->
		</div> <!-- /row -->


	</div><!-- /container -->	 
</div>
  
<?php include_once 'footer.php'; ?>
<script>
// In the following example, markers appear when the user clicks on the map.
// Each marker is labeled with a single alphabetical character.
var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var labelIndex = 0;
var maker;

function initMap() {

    // Styles a map in night mode.
    var llc = {lat: 26.396011, lng: -80.0794893};
    var map = new google.maps.Map(document.getElementById('map'), {
        center: llc,  
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
          "featureType": "administrative.locality",
          "elementType": "labels",
          "stylers": [
            {
              "visibility": "simplified"
            }
          ]
        },
        {
          "featureType": "administrative.locality",
          "elementType": "labels.icon",
          "stylers": [
            {
              "color": "#ffeb3b"
            },
            {
              "visibility": "on"
            },
            {
              "weight": 2
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

    // This event listener calls addMarker() when the map is clicked.
    // google.maps.event.addListener(map, 'click', function(event) {
    //   addMarker(event.latLng, map);
    // });

    // Add a marker at the center of the map.
    // addMarker(llc, map);

    marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: {lat: 26.396011, lng: -80.0794893}
    });
    marker.addListener('click', toggleBounce);


} //func init END

// Adds a marker to the map.
function addMarker(location, map) {
// Add the marker at the clicked location, and add the next-available label
// from the array of alphabetical characters.
    var marker = new google.maps.Marker({
        position: location,
        label: labels[labelIndex++ % labels.length],
        map: map
    });
}
function toggleBounce() {
    if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
    } else {
           marker.setAnimation(google.maps.Animation.BOUNCE);
    }
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAb41e6KKYlbNzFtOEPXDIwSO4pmNEyB8g&callback=initMap"
    async defer></script>
</body>
</html>