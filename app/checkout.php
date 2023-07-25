<?php include('header_stores.php'); ?>
<link href="assets/user/css/swiggy.css" rel="stylesheet">


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
                    <li class="awo_x _1B5rE"><span class="icon-manage-addresses _3rA45 _34BwO"></span><span class="_1ZYny ko2i4">Confirm Address</span></li>
                </ul>
            </div>
            <div class="_1stFr">
                <div>
                    <div>
                        <div class="_3lCtm"> Your Address </div>
                        <div>
                            <div class="_3xMk0">
                                <div class="g28rk">
                                    <div class="_2XWVq">
                                        <div class="_3h4gz"><input type="text" readonly class="form-control" value="<?php echo $location; ?>" placeholder="Location" name="flat" style="width:800px;" /></div>
                                        <div class="_3h4gz"><input type="text" readonly class="form-control" value="<?php echo $flat; ?>" placeholder="Flat/Door No." name="flat" style="width:800px;" /></div>
                                        <div class="_3h4gz"><input type="text" readonly class="form-control" value="<?php echo $street; ?>" placeholder="Street Name" name="steet" style="width:800px;" /></div>
                                        <div class="_3h4gz"><input type="text" readonly class="form-control" value="<?php echo $area; ?>" placeholder="Area Name" name="area" style="width:800px;" /></div>
                                        <div class="_3h4gz"><input type="number" readonly class="form-control" value="<?php echo $pincode; ?>" placeholder="Pincode" name="pincode" style="width:800px;" /></div>
                                        <button type="submit" style="background-color:green;" class="_3PUy8 f4Ovn">CONFIRM</button> <a href="address.php" class="_3PUy8 f4Ovn">UPDATE</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_1a4Mf"></div>
</div>

<?php 
							  }
								 } else { }
						?>
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



</body>

</html>
