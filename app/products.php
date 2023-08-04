<?php include('header_stores.php'); ?>




   <?php 
        if(!isset($_SESSION["email"])) {
            header("location:index.php");
        }
   ?>
    
    <?php 
        if(isset($_POST["location"])) {
            $location = $_POST["location"]; 
            $_SESSION["location"] = $location;
        } else {
            $location = $_SESSION["location"] ; 
        }
    ?>
  
        <div class="content-wrapper">
            <div class="">
                <div class="container">
                    <div class="restaurant-banner row">
                        
                        	<?php 
								$sql5 = "SELECT * FROM vendors WHERE location = '$location' ORDER BY id ASC LIMIT 1";
								$result5 = $conn->query($sql5);
								if ($result5->num_rows > 0) {                               
								while($row5 = $result5->fetch_assoc()) { 
									$v_id = $row5["id"];
									$business = $row5["business"];
									$city = $row5["city"];
									$vendorlocation = $row5["location"];
									
							?>
                        
                        <div class="res-banner-center col-md-7" style="background-image: url(../images/banners/banner1.jpg);background-size: cover;display: grid;justify-content: center;padding: 2%;height: 250px;">
                            <form action="products.php" class="onLocationSelectForm" method="post"
                                    style="position: absolute;
                                            bottom: 16%;
                                            left: 4%;"
                            >
                            <h4 class="res-banner-tit" style="font-size:12px;color:black;background: white;border-radius: 4px;padding: 4%;width: fit-content;height: fit-content;"><?php echo $business; ?></h4>
                            <p class="res-banner-txt" style="text-align: center;color: black;background: white;border-radius: 4px;padding: 4%;width: fit-content;height: fit-content;margin: auto;">
                                <select name="location" class="form-control mb-2 onLocationSelect"
                                    style="padding: 0;
                                            height: fit-content;
                                            border: none;
                                            font-size:12px;"
                                >
                                    <option value="<?php echo $vendorlocation; ?>" ><?php echo $vendorlocation; ?></option>
                                    <option value="Madhapur">Madhapur</option>
                                    <option value="Kukatpally">Kukatpally</option>
                                    <option value="Gachibowli">Gachibowli</option>
                                </select>
                            </p>
                            </form>
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
                                                grid-template-columns: 1fr;
                                                gap: 4% 14%;"
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
										
										<div class="food-list-view-box row  veg " style="    box-shadow: 0px 0px 6px 2px rgba(0, 0, 0, 0.2);border-radius: 10px;padding: 0;padding-top: 20px;">
											<div class="col-sm-9"
                                                style="display: grid;gap: 4%;"
                                            >
												<div class=" m-0" style="display:grid;grid-template-columns: auto auto;">
													<img src="../images/products/<?= $row7["image"]; ?>" class="veg-icon" style="width: 100px;border-radius: 6px;height: 100px;object-fit: cover;">
													<div class="food-menu-details food-list-details" style="margin: 0;padding: 4% 3% 6%;">
														<h6><?php echo $name; ?></h6>
                                                        <p style="font-size: 12px;"><?= $row7["description"]; ?></p>
															<p style="display: grid;
                                                                        grid-template-columns: auto auto;
                                                                        justify-content: end;
                                                                        gap: 4%;">
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
            								<div class="col-sm-3" style="padding-bottom: 10px;">
												<div class="add-btn-wrap text-right" 
                                                     style="display: grid;
                                                            grid-template-columns: 30% 20%;
                                                            align-items: center;
                                                            justify-content: end;
                                                            gap: 10%;
                                                            margin: 0;">
                                                    <div class="productQuantityDiv"
                                                         style="display: grid;
                                                                grid-template-columns: auto auto auto;
                                                                align-items: center;">
                                                        <i class="fa fa-minus productQuantityMinus" p-id="<?php echo $p_id; ?>" aria-hidden="true"
                                                            style="text-align: center;
                                                                    border: 1px solid gray;
                                                                    padding: 6px 0px;
                                                                    border-radius: 5px;
                                                                    cursor:pointer;"
                                                        ></i>
                                                        <div class="productQuantity" p-id="<?php echo $p_id; ?>" style="text-align: center;">0</div>
                                                        <i class="fa fa-plus productQuantityPlus" p-id="<?php echo $p_id; ?>" aria-hidden="true"
                                                            style="text-align: center;
                                                                    border: 1px solid gray;
                                                                    padding: 6px 0px;
                                                                    border-radius: 5px;
                                                                    cursor:pointer;"
                                                        ></i>
                                                    </div>
                                                    <a class="login-item add-btn addToCartBtn" 
                                                        u-id="<?php echo $u_id; ?>" p-id="<?php echo $p_id; ?>" v-id="<?php echo $v_id; ?>" price="<?php echo $price; ?>" 
                                                        style="border-radius: 6px;margin:0;cursor:pointer;" 
                                                    >Add</a>
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

$(document).on("click",".productQuantityPlus",function() {
    var pId = $(this).attr("p-id");
    var currentQuantity = parseInt($('.productQuantity[p-id="'+pId+'"]').text());
    $('.productQuantity[p-id="'+pId+'"]').text(currentQuantity+1);
});

$(document).on("click",".productQuantityMinus",function() {
    var pId = $(this).attr("p-id");
    var currentQuantity = parseInt($('.productQuantity[p-id="'+pId+'"]').text());
    if(currentQuantity == 0) { } else { 
        $('.productQuantity[p-id="'+pId+'"]').text(currentQuantity-1);
    }
});

$(document).on("click",".addToCartBtn",function() {
    var thisElem = $(this);
    var pId = $(this).attr("p-id");
    var quantity = $('.productQuantity[p-id="'+pId+'"]').text();
    $.post('addtocart.php',
        {
            pId : $(this).attr("p-id"),
            uId : $(this).attr("u-id"),
            vId : $(this).attr("v-id"),
            price : $(this).attr("price"),
            quantity : quantity
        },(result) => {
            thisElem.text('Added');
            setTimeout(()=>{
                if(quantity == 0) {
                    thisElem.text('Add');
                } else {
                    thisElem.text('Update');
                }
            },2000)
        }
    )
});

$('.onLocationSelect').on('change', function() {
  $(".onLocationSelectForm").submit();
});

</script>
  

</body>

</html>
