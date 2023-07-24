<?php include('header.php'); ?>
<?php $o_id = $_GET["id"]; ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Order Details</h3>
                                </div>
                                <div class="card-content card-padding">
                                    <div class="m-b-20">
                                        <div>
                                        <?php 
            								$email = $_SESSION['email'];
            								$sqlnesu = "SELECT * FROM da WHERE email = '$email' ";
            								$resultnesu = $conn->query($sqlnesu);
            								if ($resultnesu->num_rows > 0) {   
            								while($rownesu = $resultnesu->fetch_assoc()) {  
            									$daid = $rownesu["id"]; 
            							?>
										<?php 
												$sql2 = "SELECT * FROM orders WHERE id = '$o_id'";
												$result2 = $conn->query($sql2);
												if ($result2->num_rows > 0) {                               
												while($row2 = $result2->fetch_assoc()) {   
													$o_id = $row2["id"];
													$p_id = $row2["p_id"];
													$u_id = $row2["u_id"];
													$v_id = $row2["v_id"];
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
													$pcategory = $row3["category"];
													$pprice = $row3["price"];
													$pic = $row3["pic"];
										?>
										<?php 
												$sql4 = "SELECT * FROM users WHERE id = '$u_id' ";
												$result4 = $conn->query($sql4);
												if ($result4->num_rows > 0) {                               
												while($row4 = $result4->fetch_assoc()) {
													$uname = $row4["fname"];
													$ucity = $row4["city"];
													$umobile = $row4["mobile"];
													$uaddress = $row4["address"];
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
											<div class="row">
                                                <div class="col-md-6" style="margin-left:20px;">
                                                    <h4><strong> Vendor Shop Address </strong><br>
													<br></h4>
													
													<p><strong>Shop Name :</strong> <?php echo $row5["business"]; ?> </p>
													<p><strong>Person Name :</strong> <?php echo $row5["aperson"]; ?></p>
													<p><strong>Area :</strong> <?php echo $row5["city"]; ?></p>
													<p><strong>Location :</strong> <?php echo $row5["location"]; ?></p>
													<p><strong>Mobile :</strong> <?php echo $row5["mobile"]; ?></p>
													
                                                </div>
                                                <div class="col-md-5 text-right" style="margin-right:20px;">
                                                    <h4><strong>Delivery Details</strong></h4>
                                                    
                                                     <p><strong>Name :</strong> <?php echo $row4["fname"]; ?> </p>
													<p><strong>Flat Name :</strong> <?php echo $row4["flat"]; ?></p>
													<p><strong>Street Name :</strong> <?php echo $row4["street"]; ?></p>
													<p><strong>Area :</strong> <?php echo $row4["area"]; ?></p>
													<p><strong>Location :</strong> <?php echo $row4["location"]; ?></p>
													<p><strong>Pincode :</strong> <?php echo $row4["pincode"]; ?></p>
													<p><strong>Mobile :</strong> <?php echo $row6["mobile"]; ?></p>
													
                                                    <br>
                                                </div>
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

                                            <div class="table-responsive">
                                                <table class="table table-striped text-right">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Order ID</th>
                                                            <th>Description</th>
                                                            <th class="text-right">Delivery Charges</th>
                                                            <th class="text-right">Order Status</th>
                                                            <th class="text-right">Delivery Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center"><?php echo $o_id; ?></td>
                                                            <td class="text-left"><?php echo $pname; ?></td>
                                                            
                                                            
                                                    <?php 
                        								$sql555 = "SELECT * FROM others WHERE id = '2'";
                        								$result555 = $conn->query($sql555);
                        								if ($result555->num_rows > 0) {                               
                        								while($row555 = $result555->fetch_assoc()) { 
                        									$deliverycharge = $row555["value"];
                        							?>
                                                            <td>Rs.<?php echo  (round($distance,0) * $deliverycharge); ?></td>
                                                     <?php } } else { } ?>
                                                     
                                                     
                                                            <td><?php echo $status; ?></td>
                                                            <td><?php echo ($dstatus); ?></td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>

                                            <hr>
                                            <div class="text-right">
                                                
											<?php if($dstatus == 'Pending'){ ?>
												<a type="submit" href="updateorder.php?id=<?php echo $o_id; ?>&id2=Pick Up In Progress&id3=<?php echo $daid; ?>" class="btn btn-primary"> <i class="icmn-checkmark margin-right-5"></i>Claim Order</a>
											<?php } elseif($dstatus == 'Pick Up In Progress')  { ?>
												<a type="submit" href="updateorder.php?id=<?php echo $o_id; ?>&id2=Order In Transit&id3=<?php echo $daid; ?>" class="btn btn-primary"> <i class="icmn-checkmark margin-right-5"></i>Mark Order As Picked Up</a>
											<?php } elseif($dstatus == 'Order In Transit') { ?>
											    <a type="submit" href="updateorder.php?id=<?php echo $o_id; ?>&id2=Delivered&id3=<?php echo $daid; ?>" class="btn btn-primary"> <i class="icmn-checkmark margin-right-5"></i>Mark Order As Delivered</a>
											<?php } else { } ?>
											
                                            </div>
											<?php } } else { } ?>
											<?php } } else { } ?>
											<?php } } else { } ?>
											<?php } } else { } ?>
											<?php } } else { } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
    <?php include('footer.php'); ?>