<?php include('header_stores.php'); ?>

        <!-- Content Wrapper Starts -->
        <div class="content-wrapper">
            <div class="intro-banner-outer section" style="height:10px;">
            </div>
            
			<?php 
			    $location =  $_POST["location"];
			?>
			
            <!-- Food Section Starts -->
            <div class="food-section-outer">
                <div class="container">
                    <div class="food-section row" id="filter-menu">
                        <!-- Food Section Left Starts -->
                        <div class="food-sec-left col-md-3 col-sm-4 col-xs-12">
                            <!-- Restaurant Filters Starts -->
                            <div class="restaurant-filters">
                                <!-- Restaurant Filter Box Starts -->
                                <a href="#popular" class="res-filter-box filter-scroll-menu active">
                                    <span class="res-filter-icon"><i class="ion-fireball"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">Stores at <?php echo $location; ?></h6>
                                    <?php
										$sqlstep1 = "SELECT COUNT(*) AS total FROM vendors WHERE location LIKE '%{$location}%'";
										$rowNumstep1 = mysqli_query($conn, $sqlstep1);
										$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
									?>
                                        <p class="res-filter-option"><?php echo  $countstep1["total"]; ?>  Store(s)</p>
                                    </span>
                                </a>

                               
                             <!--  
                                <a href="#fast" class="res-filter-box filter-scroll-menu">
                                    <span class="res-filter-icon"><i class="ion-fireball"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">Category 1</h6>
                                        <p class="res-filter-option">4 Options</p>
                                    </span>
                                </a>

                                <a href="#offers" class="res-filter-box filter-scroll-menu">
                                    <span class="res-filter-icon"><i class="ion-fireball"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">Category 2</h6>
                                        <p class="res-filter-option">4 Options</p>
                                    </span>
                                </a>

                                <a href="#vegetarian" class="res-filter-box filter-scroll-menu">
                                    <span class="res-filter-icon"><i class="ion-fireball"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">Category 3</h6>
                                        <p class="res-filter-option">0 Options</p>
                                    </span>
                                </a>

                                <a href="#whats-new" class="res-filter-box filter-scroll-menu">
                                    <span class="res-filter-icon"><i class="ion-fireball"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">Category 4</h6>
                                        <p class="res-filter-option">3 Options</p>
                                    </span>
                                </a>

                                <a href="#see-all" class="res-filter-box filter-scroll-menu">
                                    <span class="res-filter-icon"><i class="ion-fireball"></i></span>
                                    <span class="res-filter-txt">
                                        <h6 class="res-filter-name">See All</h6>
                                        <p class="res-filter-option">4 Stores</p>
                                    </span>
                                </a>
                        -->
                        
                        
                            </div>
                            <!-- Restaurant Filters Ends -->
                        </div>
                        <!-- Food Section Left Ends -->
                        <!-- Food Section Right Starts -->
                        <div class="food-sec-right col-md-9 col-sm-8 col-xs-12">
                            <!-- Restaurant Filter List Starts -->
                            <div class="res-filter-list-section" id="popular">
                                <!-- Restaurant Filter Head Starts -->
                                <div class="res-filter-list-head">
                                    <h5>Stores from <?php echo $location; ?></h5>
                                </div>

                                <div class="restaurant-list row">
                                  

							<?php 
								$sql5 = "SELECT * FROM vendors WHERE location LIKE '%{$location}%'";
								$result5 = $conn->query($sql5);
								if ($result5->num_rows > 0) {                               
								while($row5 = $result5->fetch_assoc()) { 
									$v_id = $row5["id"];
									$business = $row5["business"];
									$city = $row5["city"];
									$vendorlocation = $row5["location"];
							?>
								  
								  <a href="products.php?id=<?php echo $v_id; ?>" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit"><?php echo $business; ?></h6>
                                            <p class="food-det-txt"><?php echo $city; ?></p>
                                            <div class="food-other-details row">
                                            
                                        <?php 
                    						$email = $_SESSION['email'];
                                            $sql = "SELECT * FROM users WHERE email = '$email' ";
                    						$result = $conn->query($sql);
                    						if ($result->num_rows > 0) {   
                                            while($row = $result->fetch_assoc()) {   
                    								$u_id = $row["id"];
                    								$userlocation = $row["location"];
                    					?>
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
                                            
                                                <div class="col-xs-6 text-left">
                                                    <span class="food-deliver-time">Store Distance</span>
                                                </div>
                                                 <div class="col-xs-3 p-r-0">
                                            <?php if (empty($userlocation)){ ?>
                                                    <span class="food-rating">0 Km</span>
                                            <?php } else { ?>
                                                    <span class="food-rating"><?php echo  (round($distance,0)); ?> Km</span>
                                            <?php } ?>
                                                </div>
                                        <?php } } else { } ?>
                                        
                                            </div>
                                        </div>
                                    </a>
	
							<?php } } else { ?>
							
							    No Stores Fount at this Location.. Please Visit Again
							
							<?php } ?>
								  
								  
								  
                                </div>
                                <!-- Restaurant List Ends -->
                            </div>
                            <!-- Restaurant Filter List Ends -->
                            <!-- Restaurant Filter List Starts -->
                            
                            
                            
                    <!--
                            <div class="res-filter-list-section" id="fast">
                                <div class="res-filter-list-head">
                                    <h5>Category 1</h5>
                                </div>
                                <div class="restaurant-list row">
                                   
								   
								   <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>

                            <div class="res-filter-list-section" id="offers">
                                <div class="res-filter-list-head">
                                    <h5>Category 2</h5>
                                </div>
                                <div class="restaurant-list row">

                                    <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>

                            </div>

                            <div class="res-filter-list-section" id="vegetarian">
                                <div class="res-filter-list-head">
                                    <h5>Category 3</h5>
                                </div>
                                <div class="restaurant-list row">

                                    <a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>

                            </div>

                            <div class="res-filter-list-section" id="whats-new">

                                <div class="res-filter-list-head">
                                    <h5>Category 4</h5>
                                </div>
                                <div class="restaurant-list row">

									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
									<a href="#" class="food-item-box col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="food-img bg-img" style="background-image: url(images/stores/example.png);"></div>
                                        <div class="food-details">
                                            <h6 class="food-det-tit">Store 1</h6>
                                            <p class="food-det-txt">123 street, Network City, Unlimited States!!!</p>
                                            <div class="food-other-details row">
                                                <div class="col-xs-3 p-r-0">
                                                    <span class="food-rating"><i class="ion-android-star"></i> 5</span>
                                                </div>
                                                <div class="col-xs-6 text-center">
                                                    <span class="food-deliver-time food-list-txt">28 Reviews</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                      -->
                      
                      
                        </div>
                        <!-- Food Section Right Ends -->
                    </div>
                </div>
            </div>

            <!-- All Restaurant List Starts -->
        </div>
        <!-- Content Wrapper Ends -->
    </div>
    <!-- Main Warapper Ends -->

    <div class="aside-backdrop"></div>
    <!-- Sidebar Section Ends -->
    <script src="assets/user/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/user/js/bootstrap.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="assets/user/js/slick.min.js"></script>
    <!-- Sidebar JS -->
    <script src="assets/user/js/asidebar.jquery.js"></script>
    <!-- Map JS -->

    <script src="assets/user/js/jquery.easy-autocomplete.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="assets/user/css/easy-autocomplete.min.css">
    <style type="text/css">
        .easy-autocomplete-container ul {
            max-height: 200px !important;
            overflow: auto !important;
        }
        
        .easy-autocomplete {
            width: 200px!important;
        }
        
        .phone_fileds {
            margin-left: 0px !important;
            border-left: 1px solid #ccc !important;
            width: 100% !important
        }
        
        .no-pad {
            padding: 0px !important;
        }
    </style>

    <script async defer src="../apis.google.com/js/api.js" onload="this.onload=function(){};handleClientLoad()" onreadystatechange="if (this.readyState === 'complete') this.onload()">
    </script>

    <!-- Nav Location Sidebar Starts -->

    <!-- Nav Location Sidebar Ends -->
    <div class="aside-backdrop"></div>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDkKetQwosod2SZ7ZGCpxuJdxY3kxo5Po&amp;libraries=places&amp;callback=initMap" async defer></script>
    <script src="assets/user/js/jquery.googlemap.js"></script>
    <!-- Incrementing JS -->
    <script src="assets/user/js/incrementing.js"></script>
    <!-- Scripts -->
    <script src="assets/user/js/scripts.js"></script>

</body>

</html>