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
                        
                        
						<div class="cart col-md-3 col-sm-12 col-xs-12">
                            <div class="cart-head">
                                <h4 class="cart-tit">Cart</h4>
                            </div>
                            
                            <?php 
                                $email = $_SESSION["email"];
                                $sql5s5 = "SELECT * FROM users WHERE email = '$email'";
								$result5s5 = $conn->query($sql5s5);
								if ($result5s5->num_rows > 0) {                               
								while($row5s5 = $result5s5->fetch_assoc()) { 
									$u_id = $row5s5["id"];
                                } } else { }

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
                            <div class="cardIndi" c-id="<?= $c_id; ?>">
                                <div>
                                    <img src="../images/products/<?= $row555["image"]; ?>" 
                                        class="veg-icon"
                                        style="width: 60px;border-radius: 6px;height: 30px;object-fit: cover;"
                                    >
                                </div>
                                &nbsp;&nbsp;
                                <div style="display:inline-block;">
                                    <strong><?php echo $p_name; ?></strong>
                                </div>
                                <div style="display:inline-block;float:right;margin-right:150px;">
                                    <strong> ₹ <?php echo $price; ?> x <?= $row55["quantity"]; ?></strong>
                                </div>
                                <div style="display:inline-block;float:right;margin-top:-25px;">
                                    <a class="removeFromCartBtn add-btn" c-id="<?= $c_id; ?>" cardIndi-val="<?= ($price * ($row55["quantity"])); ?>" style="cursor:pointer;">Remove</a>
                                </div>
                            
                            <hr style="border-top: dotted 1px;" />
                            </div>
                            
                            <?php } } else { } ?>
                            
                             <?php } } else { ?> 
     
                            <div>Empty Cart!</div>

                            <?php  } ?>
                           
                            
                           
							
                            <hr>
                            <?php 

                                $total = 0;
                                $subTotal = 0;
								$sql55 = "SELECT * FROM cart WHERE u_id = '$u_id'";
								$result55 = $conn->query($sql55);
								if ($result55->num_rows > 0) {                               
								while($row55 = $result55->fetch_assoc()) { 
									$c_id = $row55["id"];
									$p_id = $row55["p_id"];
									$v_id = $row55["v_id"];
									$price = $row55["price"];
                                    $quantity = $row55["quantity"];

                                    $subTotal = $price * $quantity;
                                    $total = $total + $subTotal;
						        
                                } } else { } ?>
							
							<?php 
								$sql555 = "SELECT * FROM others WHERE id = '1'";
								$result555 = $conn->query($sql555);
								if ($result555->num_rows > 0) {                               
								while($row555 = $result555->fetch_assoc()) { 
									$deliverycharge = $row555["value"];
							?>
							
                                <div style="padding: 2% 4%;">
                                    <div style="display:inline-block;">
                                        <strong style="font-size:12px;">Delivery Charge: </strong>
                                    </div>
                                    <div style="display:inline-block;float:right;"> 
                                        <strong> ₹ <?= $deliverycharge; ?></strong>
                                    </div>
                                </div>

							<?php } } else { } ?>
						

                                <div style="padding: 2% 4%;">
                                    <div style="display:inline-block;">
                                        <strong>Total: </strong>
                                    </div>
                                    <div style="display:inline-block;float:right;">
                                        <strong> ₹ <span class="cartValue"><?= (($total) + ( $deliverycharge)); ?></span></strong>
                                    </div>
                                </div>

                                <div style="margin: auto;width: 100%;text-align: center;">
                                    <a href="checkout.php" style="background-color: green;
                                                            color: white;
                                                            padding: 10px 100px;
                                                            border-radius: 6px;
                                                            font-size: 16px;
                                                            height: fit-content;
                                                            cursor:pointer;" class=" add-btn">CHECKOUT</a>
                                </div>

                            <?php } } else { } ?>
							
							
							
							
                            
                            
                        </div>
                        
                        
                      
                        
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
$(document).on("click",".removeFromCartBtn",function() {
    var cId = $(this).attr("c-id");
    var cardIndiVal = parseInt($(this).attr("cardIndi-val"));
    var cartVal = parseInt($(".cartValue").text());
    $.post('removecart.php',
    {
        cId : cId
    },(result)=>{
        $(".cardIndi[c-id='"+cId+"']").remove();
        $(".cartValue").text(cartVal - cardIndiVal);
    });
});
</script>

</body>

</html>