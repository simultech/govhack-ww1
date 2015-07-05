<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            
            function mapload() {
	            //google.maps.event.addDomListener(window, 'load', init);
	            init();
	        }
            
            var markers = [];
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                	draggable: false, zoomControl: false, scrollwheel: false,
                	disableDoubleClickZoom: true,streetViewControl: false,
                	disableDefaultUI: true,
                    // How zoomed in you want the map to start at (always required)
                    zoom: 3,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(10.6700, 83.9400), // New York

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#222222"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#ff0000", "weight":"0"},{"lightness":40},{"visibility":"off"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(24.6700, 33.9400),
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: "http://www.kolor.com/wiki-en/images-en/3/30/APT_resources_hotspots_gk_20100115_01.gif",
                    title: '',
                    scaledSize: new google.maps.Size(25, 25)
                });
                markers.push(marker);
                var marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(-35.6700, 127.9400),
                    map: map,
                    animation: google.maps.Animation.DROP,
                    icon: "http://www.kolor.com/wiki-en/images-en/3/30/APT_resources_hotspots_gk_20100115_01.gif",
                    title: '',
                    scaledSize: new google.maps.Size(25, 25)
                });
                markers.push(marker2);
            }
            
            setInterval(function() {
            	for (var marker in markers) {
	            	markers[marker].setAnimation(google.maps.Animation.BOUNCE);
            	}
            },1000);
            
        </script>