


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Local Cart</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />

    <style>
      body {
        background-image: url();
        background-repeat: none;
        background-position: fixed;
      }
      .head {
        background-image: url(images/mainpage/bg1.jpeg);
        height: 630px;
        background-size:100%;
      }
      .two {
        background-image: -webkit-linear-gradient(
          150deg,
          rgba(0, 0, 0, 0.1) 35%,
          white 35%
        );
        min-height: 300px;
      }
      .footer a {
        text-decoration: none;
        color: white;
        background-color: black;
    
      }
      .footer li{
        list-style: none;
		font-size:15px;
		
      }
      .carousel-caption h5 {
        margin-top: -180px !important;
        margin-left: -450px !important;
      }
      .carousel-indicators li {
        margin-top: -250px !important;
        text-align: left !important;
      }
      .carousel-indicators {
        margin-left: -580px !important;
      }
    </style>
  </head>
  <body>
    <div class=""style="width:auto">
      <div class="head p-3">
        <ul style="list-style-type:none; text-align:right;">
          <li>
            <i class="fas fa-unlock-alt" style="color: white">
              <a
                href="vendorsignup.php"
                style="text-decoration: none;font-family:verdana; font-size:normal; color: whitesmoke; border-right: 2px solid whitesmoke; padding: 10px;"
                >Become A Vendor
              </a>
            </i>
            <a
              class="btn btn-outline-primary  btn-sm"
              style="border-radius:30px; border-color:white; width:100px; color: whitesmoke"
              href="login.php"
              ><strong>User Login</strong></a
            >
          </li>
        </ul>
		
        <div
          class="box d-flex justify-content-center"
          style="border: 2px solid black; width:460px; height: 560px; background-color:lightblue; border-radius: 20px;margin-left:400px;"
        >
          <div class="col-md-8 py-3">
            <center>
              <img src="images/mainpage/logo.png" alt="" width="300px;" />
              <h5>Sign Up to Become a Vendor</h5>
              <p style="font-size:13px;">Groceries Delivered In 1 Hour! </p>
            </center>
        <form action="vendorsignupinsert.php" method="post">
            <input
              type="text"
              class="form-control mb-2"
              style="border-radius: 20px" 
              placeholder="Enter Business Name" name="business" required
            />
			<input
              type="text"
              class="form-control mb-2"
              style="border-radius: 20px"
              placeholder="Enter Authorized Person Name" name="aperson" required
            />
			<input
              type="email"
              class="form-control mb-2"
              style="border-radius: 20px"
              placeholder="Enter Email ID" name="email" required
            />
            <input
              type="number"
              class="form-control mb-2"
              style="border-radius: 20px"
              placeholder="Enter Mobile Number" name="mobile" required
            />
			<input
              type="password"
              class="form-control mb-2"
              style="border-radius: 20px"
              placeholder="Enter Password" name="password" required
            />
            
            <div id="my_map"   style="height:500px;width:500px;display: none" ></div>
            <input type="search" required style="border-radius: 20px" name="location" class="form-control mb-2" autocomplete="off"  role="combobox" aria-autocomplete="list" aria-owns="react-autowhatever-1" aria-expanded="false" aria-haspopup="false" class="textField locationInputBoxoriginRegionIcon hasClearButton" placeholder="Type in Store Location" id="pac-input" value="">
            
            
            <input
              type="text"
              class="form-control mb-2"
              style="border-radius: 20px"
              placeholder="Enter City" name="city" required
            />
            <input type="hidden" name="status" value="Not Active" />
            <button
              type="submit" name="submit"
              class="btn btn-primary btn-block"
              style="border-radius: 20px"
              >Sign Up</button
            >
            <p class="text-muted text-center mt-2" >
              Already Hold an Account..?
              <a href="vendors/index.php">Sign In</a>
            </p>
        </form>
          </div>
        </div>
      </div>
    </div>

  </div>




<script>
    var map;
    var input = document.getElementById('pac-input');
    var latitude = document.getElementById('latitude');
    var longitude = document.getElementById('longitude');
    var input_cur = document.getElementById('pac-input_cur');
    var latitude_cur = document.getElementById('latitude_cur');
    var longitude_cur = document.getElementById('longitude_cur');
    var address = document.getElementById('address');

    function initMap() { 

        var userLocation = new google.maps.LatLng(
                13.066239,
                80.274816
            );
        
        map = new google.maps.Map(document.getElementById('my_map'), {
            center: userLocation,
            zoom: 15
        });

        var service = new google.maps.places.PlacesService(map);
        var autocomplete = new google.maps.places.Autocomplete(input);
        var infowindow = new google.maps.InfoWindow();

        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow({
            content: "Shop Location",
        });

        var marker = new google.maps.Marker({
            map: map,
            draggable: true,
            anchorPoint: new google.maps.Point(0, -29)
        });

        marker.setVisible(true);
        marker.setPosition(userLocation);
        infowindow.open(map, marker);

        if (navigator.geolocation) { 
            navigator.geolocation.getCurrentPosition(function(location) { console.log(location);
                var userLocation = new google.maps.LatLng(
                    location.coords.latitude,
                    location.coords.longitude
                );
               
                latitude_cur.value = location.coords.latitude;
                longitude_cur.value = location.coords.longitude;
                
                
                //var latLngvar = location.coords.latitude+' '+location.coords.longitude+"   ";
                var latlng = {lat: parseFloat(location.coords.latitude), lng: parseFloat(location.coords.longitude)};
                getcustomaddress(latlng);
                marker.setPosition(userLocation);
                map.setCenter(userLocation);
                map.setZoom(13);
            });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

        google.maps.event.addListener(map, 'click', updateMarker);
        google.maps.event.addListener(marker, 'dragend', updateMarker);

        function getcustomaddress(latLngvar){
            var geocoder = new google.maps.Geocoder();
            console.log(latLngvar);
            geocoder.geocode({'latLng': latLngvar}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    //console.log(results[0]);
                    if (results[0]) {
                        
                        input_cur.value = results[0].formatted_address;
                         
                        //updateForm(event.latLng.lat(), event.latLng.lng(), results[0].formatted_address);
                    } else {
                        alert('No Address Found');
                    }
                } else {
                    alert('Geocoder failed due to: ' + status);
                }
            });
        }

        function updateMarker(event) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({'latLng': event.latLng}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        input.value = results[0].formatted_address;
                        updateForm(event.latLng.lat(), event.latLng.lng(), results[0].formatted_address);
                    } else {
                        alert('No Address Found');
                    }
                } else {
                    alert('Geocoder failed due to: ' + status);
                }
            });

            marker.setPosition(event.latLng);
            map.setCenter(event.latLng);
        }

        autocomplete.addListener('place_changed', function(event) {
            marker.setVisible(false);
            var place = autocomplete.getPlace();

            if (place.hasOwnProperty('place_id')) {
                if (!place.geometry) {
                    window.alert("Autocomplete's returned place contains no geometry");
                    return;
                }
                updateLocation(place.geometry.location);
            } else {
                service.textSearch({
                    query: place.name
                }, function(results, status) {
                    if (status == google.maps.places.PlacesServiceStatus.OK) {
                        updateLocation(results[0].geometry.location, results[0].formatted_address);
                        input.value = results[0].formatted_address;

                    }
                });
            }
        });

        function updateLocation(location) {
            map.setCenter(location);
            marker.setPosition(location);
            marker.setVisible(true);
            infowindow.open(map, marker);
            updateForm(location.lat(), location.lng(), input.value);
        }

        function updateForm(lat, lng, addr) {
            console.log(lat,lng, addr);
            latitude.value = lat;
            longitude.value = lng;
                    }
    }
    $('.my_map_form_current').on('click',function(){
        $('#my_map_form_current').submit();
    })

    /*$('.pac-input').on('blur',function(){
        if($('#latitude').val()!=''){
            $('#my_map_form').submit();
        }
    })*/

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po&amp;libraries=places&amp;callback=initMap" async defer></script>
     





    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
