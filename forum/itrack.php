<?
header("X-XSS-Protection: 0");
header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Geolocation</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
  </style>
  <script src="https://www.gstatic.com/firebasejs/4.12.1/firebase.js"></script>
  <!--<script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-app.js"></script>-->
  <!--<script src="https://www.gstatic.com/firebasejs/6.0.4/firebase-database.js"></script>-->
  <script src="https://cdn.firebase.com/libs/geofire/4.1.2/geofire.min.js"></script>
    
  <script>

    var config = {
        apiKey: "AIzaSyDWaRUfJVbFCFCGsI2okNEIRvKNYwDKRVM",
        authDomain: "csms-53576.firebaseapp.com",
        databaseURL: "https://csms-53576.firebaseio.com",
        projectId: "csms-53576",
        storageBucket: "csms-53576.appspot.com",
        messagingSenderId: "448392195185",
        appId: "1:448392195185:web:a61d4423dfdf5642"
      
      
    };

    if (!firebase.apps.length) {
      firebase.initializeApp(config);
    }

    //Create a node at firebase location to add locations as child keys
    var locationsRef = firebase.database().ref("geolocations");
      
    // Create a new GeoFire key under users Firebase location
    var geoFire = new GeoFire(locationsRef.push());
  </script>
</head>
<body>
  <div id="map"></div>
  <script>

    var map, infoWindow;
    var lat, lng;
    

    function initMap() {
      map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 10,
      });
      infoWindow = new google.maps.InfoWindow;
      // Try HTML5 geolocation.
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          lat = position.coords.latitude;
          lng = position.coords.longitude;
          var pos = {lat: lat, lng: lng };
   
         // _setGeoFire();

          var locationsRef = firebase.database().ref("geolocations");
      
          locationsRef.on('child_added', function(snapshot) {
           
            var bounds = new google.maps.LatLngBounds(); // declaration 
            var data = snapshot.val();
            
            var tgl = data.date.split(' ')[0];
            tgl = tgl.split('/')[2] + '/' + tgl.split('/')[1] + '/' + tgl.split('/')[0] + ' ' + data.date.split(' ')[1];
            var startTime = new Date(tgl); 
            var endTime = new Date();
            var difference = endTime.getTime() - startTime.getTime();
            var resultInMinutes = Math.round(difference / 60000);
            let url = "https://maps.google.com/mapfiles/ms/icons/";
            
            if(resultInMinutes>30){
                url += "red-dot.png";
            }else{
                url += "green-dot.png";
            }
            
            
            
            var marker = new google.maps.Marker({
              position: {
                lat: data.latitude,
                lng: data.longitude
              },
              map: map,
              icon: {
                  url: url
                }
            });

            bounds.extend(marker.getPosition());

            marker.addListener('click', (function(data) {
              return function(e) {
                var address;
                var geocoder = new google.maps.Geocoder();
                var service = new google.maps.places.PlacesService(map);
                
      
                geocoder.geocode({
                  'latLng': new google.maps.LatLng(data.latitude, data.longitude)
                  }, function (results, status) {
                    if (status ==google.maps.GeocoderStatus.OK) {
                      if (results[0]) {
                          if (marker.getAnimation() !== null) {
                              marker.setAnimation(null);
                            } else {
                              marker.setAnimation(google.maps.Animation.BOUNCE);
                            }

                        address = results[0].formatted_address;
                        infoWindow.setContent("Nik: " + data.nik + "<br>Lokasi: " + data.latitude + ","+ data.longitude  + "<br>Address: " + address +"<br>Last: " + data.date);
                        infoWindow.open(map, marker);
                      } else {
                        alert('No results found');
                      }
                    } else {
                      //alert('Geocoder failed due to: ' + status);
                    }
                });  
                  
                  
                
              }
            }(data)));

            map.fitBounds(bounds);
            map.setZoom(14.5);

          
          });

          
          map.setCenter(pos);
        }, function() {
          handleLocationError(true, infoWindow, map.getCenter());
        });
      } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
      }
    }
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
          'Error: The Geolocation service failed.' :
          'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
    }
    function _setGeoFire(){
        geoFire.set("User",[lat,lng]).then(()=>{
          console.log("Location added");
        }).catch(function(error) {
          console.log(error);
        });
    }

  </script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBszZ3A0R4_8Y0lBitLqNn7EhEfNw8u2-I&libraries=places&callback=initMap"></script>
</body>
</html>