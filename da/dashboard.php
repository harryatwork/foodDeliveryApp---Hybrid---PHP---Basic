<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">
						   <?php 
								$email = $_SESSION['email'];
								$sqlnesu = "SELECT * FROM da WHERE email = '$email' ";
								$resultnesu = $conn->query($sqlnesu);
								if ($resultnesu->num_rows > 0) {   
								while($rownesu = $resultnesu->fetch_assoc()) {  
									$da_id = $rownesu["id"]; 
							?>
							
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Total Available Orders</strong></p>
                                    <?php
										$sqlstep2 = "SELECT COUNT(*) AS total FROM orders WHERE status = 'Confirmed' AND dstatus != 'Delivered'";
										$rowNumstep2 = mysqli_query($conn, $sqlstep2);
										$countstep2 = mysqli_fetch_assoc($rowNumstep2);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep2["total"]; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-rose">
                                      
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Running Orders By You</strong></p>
									<?php
										$sqlstep3 = "SELECT COUNT(*) AS total FROM orders WHERE status = 'Confirmed' AND dstatus != 'Delivered' AND daid = '$da_id'";
										$rowNumstep3 = mysqli_query($conn, $sqlstep3);
										$countstep3 = mysqli_fetch_assoc($rowNumstep3);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep3["total"]; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Revenue</strong></p>
                                    <h3 class="card-title">Rs.00</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Orders Delivered By You</strong></p>
									<?php
										$sqlstep4 = "SELECT COUNT(*) AS total FROM orders WHERE status = 'Confirmed' AND daid = '$da_id' AND dstatus = 'Delivered'";
										$rowNumstep4 = mysqli_query($conn, $sqlstep4);
										$countstep4 = mysqli_fetch_assoc($rowNumstep4);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep4["total"]; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Running Orders</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <th style="text-align:center;">Order ID</th>
                                            <th style="text-align:center;">Product</th>
                                            <th style="text-align:center;">Category</th>
                                            <th style="text-align:center;">Vendor</th>
											<th style="text-align:center;">User</th>
											<th style="text-align:center;">Delivery Area</th>
											<th style="text-align:center;">Delivery Charge</th>
											<th style="text-align:center;">Order Status</th>
											<th style="text-align:center;">Delivery Status</th>
										<?php if($dstatus == 'Delivered'){ } else { ?>
											<th style="text-align:center;"></th>
										<?php } ?>
                                        </thead>
                                        <tbody>
										<?php 
												$sql2 = "SELECT * FROM orders WHERE status = 'Confirmed' AND (daid = '$da_id' OR daid = '0') ORDER BY id DESC LIMIT 25";
												$result2 = $conn->query($sql2);
												if ($result2->num_rows > 0) {                               
												while($row2 = $result2->fetch_assoc()) {   
													$o_id = $row2["id"];
													$p_id = $row2["p_id"];
													$u_id = $row2["u_id"];
													$v_id = $row2["v_id"];
													$price = $row2["price"];
													$quantity = $row2["quantity"];
													$dstatus = $row2["dstatus"];
													$status = $row2["status"];
													$date = $row2["date"];
										?>
										<?php 
												$sql3 = "SELECT * FROM products WHERE id = '$p_id' ";
												$result3 = $conn->query($sql3);
												if ($result3->num_rows > 0) {                               
												while($row3 = $result3->fetch_assoc()) { 
													$pname = $row3["name"];
													$pcategory = $row3["cat"];
										?>
										<?php 
												$sql4 = "SELECT * FROM users WHERE id = '$u_id' ";
												$result4 = $conn->query($sql4);
												if ($result4->num_rows > 0) {                               
												while($row4 = $result4->fetch_assoc()) {
													$uname = $row4["fname"];
													$ucity = $row4["area"];
													$userlocation = $row4["location"];
										?>
										<?php 
												$sql5 = "SELECT * FROM vendors WHERE id = '$v_id' ";
												$result5 = $conn->query($sql5);
												if ($result5->num_rows > 0) {                               
												while($row5 = $result5->fetch_assoc()) { 
													$business = $row5["business"];
													$vendorlocation = $row5["location"];
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

                                            <tr>
                                                <td style="text-align:center;"><?php echo $o_id; ?></td>
												<td style="text-align:center;"><?php echo $pname; ?></td>
												<td style="text-align:center;"><?php echo $pcategory; ?></td>
												<td style="text-align:center;"><?php echo $business; ?></td>
                                                <td style="text-align:center;"><?php echo $uname; ?></td>
												<td style="text-align:center;"><?php echo $ucity; ?></td>
												
											<?php 
                								$sql555 = "SELECT * FROM others WHERE id = '2'";
                								$result555 = $conn->query($sql555);
                								if ($result555->num_rows > 0) {                               
                								while($row555 = $result555->fetch_assoc()) { 
                									$deliverycharge = $row555["value"];
                							?>
                                                <td style="text-align:center;">Rs. <?php echo  (round($distance,0) * $deliverycharge); ?></td>
                                            <?php } } else { } ?>
                                            
                                                <td style="text-align:center;"><?php echo $status; ?></td>
                                                <td style="text-align:center;"><?php echo $dstatus; ?></td>
                                            <?php if($dstatus == 'Delivered'){ } else { ?>
                                                <td class="btn button" style="text-align:center;background-color:green;"><a href="ordersub.php?id=<?php echo $o_id; ?>" style="color:white;">Details</a></td>
											<?php } ?>
                                            </tr>
										<?php } } else { echo '4';  } ?>
										<?php } } else { echo '3';  } ?>
										<?php } } else { echo '2';  } ?>
										<?php } } else { echo 'No Orders So Far';  } ?>
										
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php } } else { } ?>

                </div>
            </div>
        
<?php include('footer.php'); ?>