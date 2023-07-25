<?php include('header_stores.php'); ?>


   
    
    <?php $v_id = $_GET["id"]; ?>
  
        <div class="content-wrapper">
            <div class="restaurant-banner-outer">
                <div class="container">
                    <div class="restaurant-banner row">
                        <div class="res-banner-left col-md-3">
                            <div class="res-banner-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                        </div>
                        
                        	<?php 
								$sql5 = "SELECT * FROM vendors WHERE id = '$v_id'";
								$result5 = $conn->query($sql5);
								if ($result5->num_rows > 0) {                               
								while($row5 = $result5->fetch_assoc()) { 
									$v_id = $row5["id"];
									$business = $row5["business"];
									$city = $row5["city"];
									$vendorlocation = $row5["location"];
									
							?>
                        
                        <div class="res-banner-center col-md-7">
                            <h4 class="res-banner-tit"><?php echo $business; ?></h4>
                            <p class="res-banner-txt"><?php echo $city; ?></p>
                            <div class="res-banner-ratings row">
                                <div class="res-banner-rate-block col-md-2 col-xs-4">
                                   
                                </div>
                                <div class="res-banner-rate-block col-md-2 col-xs-4">
                                  
                                </div>
                            </div>
                            <div class="res-banner-search-block row"></div>
                        </div>
                        <div class="res-banner-right col-md-2"></div>
                    </div>
                </div>
            </div>

			
            <div class="food-section-outer">
                <div class="container-fluid">
                    <div class="food-section row" id="filter-menu">
                        

                        <div class="food-sec-left col-md-3 col-sm-12 col-xs-12">
                            <div class="food-filters">
                            <?php 
								$sql6 = "SELECT DISTINCT(cat) FROM products WHERE v_id = '$v_id'";
								$result6 = $conn->query($sql6);
								if ($result6->num_rows > 0) {                               
								while($row6 = $result6->fetch_assoc()) { 
									$cat = $row6["cat"];
							?>
                                <a href="#<?php echo $cat; ?>" class="food-filters-item filter-scroll-menu"><?php echo $cat; ?></a>
                            <?php } } else { } ?>
                            </div>
                        </div>

						
                        <div class="food-sec-right col-md-6 col-sm-12 col-xs-12">
                           
						<?php 
								$sql6 = "SELECT DISTINCT(cat) FROM products WHERE v_id = '$v_id'";
								$result6 = $conn->query($sql6);
								if ($result6->num_rows > 0) {                               
								while($row6 = $result6->fetch_assoc()) { 
									$cat = $row6["cat"];
							?>
							
							<div class="restaurant-food-list" id="<?php echo $cat; ?>">
								<div class="res-filter-list-head">
									<h5><?php echo $cat; ?></h5>
									<?php
										$sqlstep1 = "SELECT COUNT(*) AS total FROM products WHERE cat = '$cat' AND v_id = '$v_id'";
										$rowNumstep1 = mysqli_query($conn, $sqlstep1);
										$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
									?>
								<p class="food-item-txt"><?php echo  $countstep1["total"]; ?> Product(s)</p>
								</div>
								
								<div class="food-list-view">
									<div class="food-list-view-section">
										<div class="food-list-sec-head"></div>
										
    							<?php 
    								$sql7 = "SELECT * FROM products WHERE v_id = '$v_id' AND cat = '$cat'";
    								$result7 = $conn->query($sql7);
    								if ($result7->num_rows > 0) {                               
    								while($row7 = $result7->fetch_assoc()) {
    								    $p_id = $row7["id"];
    									$name = $row7["name"];
    									$price = $row7["price"];
    							?>		
										
										<div class="food-list-view-box row  veg ">
											<div class="col-sm-9">
												<div class="row m-0">
													<img src="images/products/example.png" class="veg-icon">
													<div class="food-menu-details food-list-details">
														<h6><?php echo $name; ?></h6>
															<p>₹ <?php echo $price; ?></p>
													</div>
												</div>
											</div>
									 <?php 
            								$email = $_SESSION['email'];
                                            $sql = "SELECT * FROM users WHERE email = '$email' ";
            								$result = $conn->query($sql);
            								if ($result->num_rows > 0) {   
                                            while($row = $result->fetch_assoc()) {   
            									$u_id = $row["id"];
            									$userlocation = $row["location"];
            						?>
            								<div class="col-sm-3">
												<div class="add-btn-wrap text-right">
													<a href="addtocart.php?id1=<?php echo $u_id; ?>&id2=<?php echo $p_id; ?>&id3=<?php echo $v_id; ?>&id4=<?php echo $price; ?>" class="login-item add-btn" >Add</a>
												</div>
											</div>
									<?php } } else { } ?>
										</div>
							
                                <?php } } else { } ?>
					
                                       
									</div>
								</div>
							</div>
							
							<?php } } else { } ?>

                          </div>
                          
                          
                          
                        
    
<?php

function getDistance($addressFrom, $addressTo, $unit = ''){
    // Google API key
    $apiKey = 'AIzaSyDtkgnIZBDb6MCQv_2GObjHhViJDGWArzQ';
    
    // Change address format
    $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
    $formattedAddrTo     = str_replace(' ', '+', $addressTo);
    
    // Geocoding API request with start address
    $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&key='.$apiKey);
    $outputFrom = json_decode($geocodeFrom);
    if(!empty($outputFrom->error_message)){
        return $outputFrom->error_message;
    }
    
    // Geocoding API request with end address
    $geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false&key='.$apiKey);
    $outputTo = json_decode($geocodeTo);
    if(!empty($outputTo->error_message)){
        return $outputTo->error_message;
    }
    
    // Get latitude and longitude from the geodata
    $latitudeFrom    = $outputFrom->results[0]->geometry->location->lat;
    $longitudeFrom    = $outputFrom->results[0]->geometry->location->lng;
    $latitudeTo        = $outputTo->results[0]->geometry->location->lat;
    $longitudeTo    = $outputTo->results[0]->geometry->location->lng;
    
    // Calculate distance between latitude and longitude
    $theta    = $longitudeFrom - $longitudeTo;
    $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
    $dist    = acos($dist);
    $dist    = rad2deg($dist);
    $miles    = $dist * 60 * 1.1515;
    
    // Convert unit and return distance
    $unit = strtoupper($unit);
    if($unit == "K"){
        return round($miles * 1.609344, 2).'';
    }elseif($unit == "M"){
        return round($miles * 1609.344, 2).' meters';
    }else{
        return round($miles, 2).' miles';
    }
}

$addressFrom = $userlocation;
$addressTo   = $vendorlocation;

// Get distance in km
$distance = getDistance($addressFrom, $addressTo, "K");


?>
    
    
         
                        
                        
						<div class="cart col-md-3 col-sm-12 col-xs-12">
                            <div class="cart-head">
                                <h4 class="cart-tit">Cart</h4>
                            </div>
                            
                            <?php 
								$sql55 = "SELECT * FROM cart WHERE u_id = '$u_id'";
								$result55 = $conn->query($sql55);
								if ($result55->num_rows > 0) {                               
								while($row55 = $result55->fetch_assoc()) { 
									$c_id = $row55["id"];
									$p_id = $row55["p_id"];
									$v_id = $row55["v_id"];
									$price = $row55["price"];
							?>
							 <?php 
								$sql555 = "SELECT * FROM products WHERE id = '$p_id'";
								$result555 = $conn->query($sql555);
								if ($result555->num_rows > 0) {                               
								while($row555 = $result555->fetch_assoc()) { 
									$p_name = $row555["name"];
							?>
                            
                            <div><img src="images/products/example.png" class="veg-icon"></div>
                            &nbsp;&nbsp;
                            <div style="display:inline-block;"><strong><?php echo $p_name; ?></strong></div>
                            <div style="display:inline-block;float:right;margin-right:150px;"><strong> ₹ <?php echo $price; ?></strong></div>
                            <div style="display:inline-block;float:right;margin-top:-25px;"><a href="removecart.php?id=<?php echo $c_id; ?>&id2=<?php echo $v_id; ?>" class=" add-btn">Remove</a></div>
                            
                            <hr style="border-top: dotted 1px;" />
                            
                            <?php } } else { } ?>
                            
                             <?php } } else { ?> 
     
                            <div>Empty Cart!</div>

                            <?php  } ?>
                           
                            
                           
							
                            <hr>
                            <?php 
								$sql55 = "SELECT * FROM cart WHERE u_id = '$u_id' LIMIT 1";
								$result55 = $conn->query($sql55);
								if ($result55->num_rows > 0) {                               
								while($row55 = $result55->fetch_assoc()) { 
									$c_id = $row55["id"];
									$p_id = $row55["p_id"];
									$v_id = $row55["v_id"];
									$price = $row55["price"];
							?>
							
							<?php 
								$sql555 = "SELECT * FROM others WHERE id = '1'";
								$result555 = $conn->query($sql555);
								if ($result555->num_rows > 0) {                               
								while($row555 = $result555->fetch_assoc()) { 
									$deliverycharge = $row555["value"];
							?>
							
							
							 &nbsp;&nbsp;&nbsp;&nbsp;
							<div style="display:inline-block;"><strong style="font-size:12px;">Delivery Charge: </strong></div>
							<div style="display:inline-block;float:right;margin-right:150px;"><strong> ₹ <?php echo  (round($distance,0) * $deliverycharge); ?></strong></div>
							<div style="display:inline-block;float:right;margin-top:-20px;;margin-right:10px;"><strong><?php echo  $distance; ?> Kilo Meters</strong></div>
							
							<?php } } else { } ?>
						
							
							<?php
									$sqlstep2ck = "SELECT SUM(price) AS total FROM cart WHERE u_id = '$u_id'";
									$rowNumstep2ck = mysqli_query($conn, $sqlstep2ck);
									$countstep2ck = mysqli_fetch_assoc($rowNumstep2ck);								
								?>
							<br><br>
						<form action="checkout.php" method="post">
							&nbsp;&nbsp;&nbsp;&nbsp;
							<div style="display:inline-block;"><strong>Total: </strong></div>
							<div style="display:inline-block;float:right;margin-right:150px;"><strong> ₹ <?php echo  (($countstep2ck["total"]) + (round($distance,0) * $deliverycharge)); ?></strong></div>
						<input type="hidden" name="total" value="<?php echo  (($countstep2ck["total"]) + (round($distance,0) * $deliverycharge)); ?>" />
							<div style="display:inline-block;float:right;margin-top:-25px;"><button type="submit" style="background-color:green; color:white;" class=" add-btn">CHECKOUT</button></div>
						</form>
							
                            <?php } } else { } ?>
							
							
							
							
                            
                            
                        </div>
                        
                        
                        <?php } } else { } ?>
                        
                    </div>
                </div>
            </div>
            <!-- Food Section Ends -->
        </div>
        <!-- Content Wrapper Ends -->
        <!-- Footer Starts -->
        <footer>
        </footer>
        <!-- Footer Ends -->
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



</body>

</html>
