<?php include('header_stores.php'); ?>
<link href="assets/user/css/swiggy.css" rel="stylesheet">

<?php 

if(isset($_POST['submit'])){

$flat = $_POST['flat'];
$location = $_POST['location'];
$street = $_POST['street'];
$area = $_POST['area'];
$pincode = $_POST['pincode'];

$id = $_POST['id'];

$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE users SET flat = '$flat', location = '$location', street = '$street', area = '$area', pincode = '$pincode'

WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
header("Location: address.php?id=1");
}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}

}

$conn->close();
?>



<?php 
	session_start();
?>
<?php include ('db.php'); ?>
<?php 
								$email = $_SESSION['email'];
                                $sql = "SELECT * FROM users WHERE email = '$email' ";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {   
                                while($row = $result->fetch_assoc()) {   
									$u_id = $row["id"];
									$flat = $row["flat"];
									$location = $row["location"];
									$street = $row["street"];
									$area = $row["area"];
									$pincode = $row["pincode"];
						?>
<div class="_3tDvm ">
    <div class="v6luz"></div>
    <div class="_2QhOV _3glSS">
        <div class="_3R9IF">
            <div class="_2gu8R">
                <ul>
                    <li class="awo_x"><a href="orders.php"><span class="icon-orders _3rA45"></span><span class="_1ZYny">Orders</span></a></li>
                    <li class="awo_x _1B5rE"><a href="address.php"><span class="icon-manage-addresses _3rA45 _34BwO"></span><span class="_1ZYny ko2i4">Address</span></a></li>
                </ul>
            </div>
            <div class="_1stFr">
                <div>
                    <div>
                        <?php $get_id = $_GET["id"]; 
                            if($get_id == 1){ ?>
                             <div class="_3lCtm" style="color:green;"> Address has been Updated Succesfully. </div>
                        <?php } else { ?>
                             <div class="_3lCtm"> Your Address </div>
                        <?php } ?>
                            
                       
                        <div>
                            <div class="_3xMk0">
                                <div class="g28rk">
                                    <form action="address.php" method="post">
                                    <div class="_2XWVq">
                                        
                                        <div class="_3h4gz">
                                        <div id="my_map"   style="height:500px;width:500px;display: none" ></div>
                                        <input type="search" name="location" class="form-control" autocomplete="off" style="width:800px;" value="<?php echo $location; ?>" role="combobox" aria-autocomplete="list" aria-owns="react-autowhatever-1" aria-expanded="false" aria-haspopup="false" class="textField locationInputBoxoriginRegionIcon hasClearButton" placeholder="Type in a Land Mark (OR) Area" id="pac-input" value="">
                                        </div>
                                        
                                        <div class="_3h4gz"><input type="text" class="form-control" placeholder="Flat/Door No." value="<?php echo $flat; ?>" name="flat" style="width:800px;" /></div>
                                        <div class="_3h4gz"><input type="text" class="form-control" placeholder="Street Name" value="<?php echo $street; ?>" name="street" style="width:800px;" /></div>
                                        <div class="_3h4gz"><input type="text" class="form-control" placeholder="Area Name" value="<?php echo $area; ?>" name="area" style="width:800px;" /></div>
                                        <div class="_3h4gz"><input type="number" class="form-control" placeholder="Pincode" value="<?php echo $pincode; ?>" name="pincode" style="width:800px;" /></div>
                                        <input type="hidden" name="id" value="<?php echo $u_id; ?>" />
                                        <button type="submit" name="submit" class="_3PUy8 f4Ovn">Update</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php 
							  }
								 } else { }
						?>
						
						
    <div class="_1a4Mf"></div>
</div>


    <div class="aside-backdrop"></div>
    
  
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://foodie.deliveryventure.com/assets/user/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://foodie.deliveryventure.com/assets/user/js/bootstrap.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="https://foodie.deliveryventure.com/assets/user/js/slick.min.js"></script>
    <!-- Sidebar JS -->
    <script src="https://foodie.deliveryventure.com/assets/user/js/asidebar.jquery.js"></script>
    <!-- Map JS -->

    <!-- Signup Sidebar Ends -->
 <script src="https://foodie.deliveryventure.com/assets/user/js/jquery.easy-autocomplete.js" type="text/javascript"></script>
 <link rel="stylesheet" type="text/css" href="https://foodie.deliveryventure.com/assets/user/css/easy-autocomplete.min.css">
    <style type="text/css">
        .easy-autocomplete-container ul { max-height: 200px !important; overflow: auto !important; }
        .easy-autocomplete { width:200px!important; }
        .phone_fileds {
            margin-left: 0px !important;
            border-left: 1px solid #ccc !important;
            width: 100% !important
        }
        .no-pad{
            padding: 0px !important;
        }
    </style>

    <div class="aside-backdrop"></div>

    
    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd1bmlOo9-PQZ3hgpPJ9lQSyTPZ6Pn9Uw&libraries=places&callback=initMap" async defer></script>    <script src="https://foodie.deliveryventure.com/assets/user/js/jquery.googlemap.js"></script>
    <!-- Incrementing JS -->
    <script src="https://foodie.deliveryventure.com/assets/user/js/incrementing.js"></script>
    <!-- Scripts -->
    <script src="https://foodie.deliveryventure.com/assets/user/js/scripts.js"></script>





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
     

</body>

</html>
