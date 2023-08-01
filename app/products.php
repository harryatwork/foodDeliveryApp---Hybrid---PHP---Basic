<?php include('header_stores.php'); ?>


   <?php 
        if(!isset($_SESSION["email"])) {
            header("location:index.php");
        }
   ?>
    
    <?php $v_id = 1; ?>
  
        <div class="content-wrapper">
            <div class="">
                <div class="container">
                    <div class="restaurant-banner row">
                        
                        	<?php 
								$sql5 = "SELECT * FROM vendors ORDER BY id ASC LIMIT 1";
								$result5 = $conn->query($sql5);
								if ($result5->num_rows > 0) {                               
								while($row5 = $result5->fetch_assoc()) { 
									$v_id = $row5["id"];
									$business = $row5["business"];
									$city = $row5["city"];
									$vendorlocation = $row5["location"];
									
							?>
                        
                        <div class="res-banner-center col-md-7" style="background-image: url(../images/banners/vg1.jpg);background-size: cover;display: grid;justify-content: center;padding: 2%;">
                            <h4 class="res-banner-tit" style="color:black;background: white;border-radius: 4px;padding: 4%;width: fit-content;height: fit-content;"><?php echo $business; ?></h4>
                            <p class="res-banner-txt" style="text-align: center;color: black;background: white;border-radius: 4px;padding: 4%;width: fit-content;height: fit-content;margin: auto;"><?php echo $vendorlocation; ?></p>
                        </div>
                        <div class="res-banner-right col-md-2"></div>
                    </div>
                </div>
            </div>

			
            <div class="food-section-outer">
                <div class="container-fluid">
                    <div class="food-section row" id="filter-menu">
                        

                        <div class="food-sec-left col-md-3 col-sm-12 col-xs-12">
                            <div class="food-filters" style="display:flex;gap:2%;border:none;">
                            <?php 
								$sql6 = "SELECT DISTINCT(cat) FROM products WHERE v_id = '$v_id'";
								$result6 = $conn->query($sql6);
								if ($result6->num_rows > 0) {                               
								while($row6 = $result6->fetch_assoc()) { 
									$cat = $row6["cat"];
							?>
                                <a href="#<?php echo $cat; ?>" class="food-filters-item filter-scroll-menu"
                                    style="background: #ffc1c0;border-radius: 8px;"
                                ><?php echo $cat; ?></a>
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
									<div class="food-list-view-section" 
                                        style="display: grid;
                                                grid-template-columns: 1fr 1fr;
                                                gap: 4% 10%;"
                                    >
										<!-- <div class="food-list-sec-head"></div> -->
										
    							<?php 
    								$sql7 = "SELECT * FROM products WHERE v_id = '$v_id' AND cat = '$cat'";
    								$result7 = $conn->query($sql7);
    								if ($result7->num_rows > 0) {                               
    								while($row7 = $result7->fetch_assoc()) {
    								    $p_id = $row7["id"];
    									$name = $row7["name"];
    									$price = $row7["price"];
    							?>		
										
										<div class="food-list-view-box row  veg " style="box-shadow: 0px 0px 6px 2px rgba(0, 0, 0, 0.2);border-radius: 10px; padding: 0;padding-top:20px;">
											<div class="col-sm-9"
                                                style="display: grid;gap: 4%;"
                                            >
												<div class="row m-0" style="display:grid;">
													<img src="../images/products/<?= $row7["image"]; ?>" class="veg-icon" style="width: 100%;border-radius: 6px;height: 160px;object-fit: cover;">
													<div class="food-menu-details food-list-details" style="margin: 0;padding: 4% 0% 6%;">
														<h6><?php echo $name; ?></h6>
															<p style="display:grid;grid-template-columns: auto auto;justify-content: space-between;">
                                                                <span>₹ <?php echo $price; ?></span>
                                                                <span style="font-size: 10px;">unit(gms/no) <?= $row7["quantity"]; ?></span>
                                                            </p>
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
												<div class="add-btn-wrap text-right" >
                                                    <a class="login-item add-btn addToCartBtn" u-id="<?php echo $u_id; ?>" p-id="<?php echo $p_id; ?>" v-id="<?php echo $v_id; ?>" price="<?php echo $price; ?>" style="border-radius: 6px;" >Add</a>
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



    <?php include("footer.php"); ?>
    

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).on("click",".addToCartBtn",function() {
    var thisElem = $(this);
    $.post('addtocart.php',
        {
            pId : $(this).attr("p-id"),
            uId : $(this).attr("u-id"),
            vId : $(this).attr("v-id"),
            price : $(this).attr("price"),
        },(result) => {
            thisElem.text('Added');
        }
    )
});
</script>
  

</body>

</html>
