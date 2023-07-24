<style>
  @media only screen and (max-width: 768px) {
  /* For mobile phones: */
  .mobile {
    margin-left:-12px;
    width:350px;
  }
}
@media only screen and (min-width: 768px) {
    .mobile {
        margin-left:30%;
        width:460px;
    }
}
</style>

<?php include('header_index.php'); ?>
		<br><br><br><br>
        <div
          class="box d-flex justify-content-center mobile"
          style="border: 2px solid black;  height: 300px; background-color:lightblue; border-radius: 20px;"
        >
          <div class="col-md-8 py-3">
            <form action="stores.php" method="post">
            <center>
              <img src="images/mainpage/logo.png" alt="" width="300px;" />
              <h5>Groceries Delivered In 1 Hour!</h5>
              <p style="font-size:13px;">Enter your postal code to see your local stores</p>
            </center>

            
            <div id="my_map"   style="height:500px;width:500px;display: none" ></div>
            <input type="search" required style="border-radius: 20px" name="location" class="form-control mb-2" autocomplete="off"  role="combobox" aria-autocomplete="list" aria-owns="react-autowhatever-1" aria-expanded="false" aria-haspopup="false" class="textField locationInputBoxoriginRegionIcon hasClearButton" placeholder="Type in Location" id="pac-input" value="">
            
            <button
              type="submit"
              class="btn btn-primary btn-block"
              style="border-radius: 20px; background-color:#0C35DE;"
              >Find Stores</button
            >
            </form>
            <p class="text-muted text-center mt-2">
              Already have an account?
              <a href="login.php">Login</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="" style="width:auto; ">
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators " >
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active" style="background-color:black;"
          ></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="two">
              <div
                class="-webkit-linear-gradient"
                style="float:right;position: relative;z-index: -1;"
              >
                  
            <?php 
                                $sql1 = "SELECT * FROM banners WHERE id = '1' ";
								$result1 = $conn->query($sql1);
								if ($result1->num_rows > 0) {   
                                while($row1 = $result1->fetch_assoc()) {   
									$banner1 = $row1["banner"];
						?>
                <img src="images/banners/<?php echo $banner1; ?>" alt="" width="550" height="300" />
            <?php } } else { } ?>
            
              </div>
            </div>
            <div class="carousel-caption d-none d-md-block" style="color:black;">
              <h5>Slider1</h5>
              <p style="text-align: left;">Slider content, Slider content, Slider content, Slider content, <br> Slider content, Slider content, </p>
            </div>
          </div>
          
          
          
          
          
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleIndicators"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


      <div class="" style="width: auto">
      <div class="row no-gutters" style="background-color:whitesmoke">
        <div class="col-md-6">
          <img src="images/mainpage/ph.jpg" class="img-fluid" />
        </div>
        <div class="col-md-6 py-3">
          <center>
            <h2>Download</h2>
            <h2>Our App</h2>
            <p>
              Footer content, Footer content, Footer content, Footer content, Footer content, Footer content, 
Footer content, Footer content, Footer content, Footer content, Footer content,             </p>
            <h5>Download our apps for offline coursetaking</h5>
            <br />
            <a href="#" style="text-decoration:none;color:black">
              <i class="fab fa-apple" style="font-size: 50px"></i>
            </a>
			&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" style="text-decoration:none;color:black">
              <i class="fab fa-android" style="font-size: 50px"></i>
            </a>
          </center>
        </div>
      </div>
      </div>

      <div class="" style="width: auto;" >
      <div class="footer py-3" style="background-color: black">
        <div class="row">
          <div class="col-md-3">
            <ul>
              <h5 style="color:white">QUICK LINKS</h5>
              <li><a href="vendorsignup.php">Become Vendor</a></li>
              <li><a href="#">Grocery Franchise</a></li>
              <li><a href="#">Media & Community</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul>
              <h5 style="color:white">ABOUT COMPANY</h5>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="admin/index.php">Admin</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5 style="color:white">ABOUT APP</h5>
            <p style="color:white;font-size:15px;">
             Footer content, Footer content, Footer content, Footer content, Footer content, Footer content, 
			 Footer content, Footer content, Footer content, 
            </p>
          </div>
          <div class="col-md-3 py-5">
            <center>
            <a href="#"><i class="fab fa-twitter fa-2x mr-1"></i></a>
            <a href="#"> <i class="fab fa-facebook fa-2x mr-1"></i></a>
            <a href="#"> <i class="fab fa-instagram fa-2x mr-1"></i></a>
            <a href="#"> <i class="fab fa-youtube fa-2x mr-1"></i></a>
          </center>
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
