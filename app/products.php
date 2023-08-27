<?php include('header_stores.php'); ?>



<style>
@keyframes tonext {
  75% {
    left: 0;
  }
  95% {
    left: 100%;
  }
  98% {
    left: 100%;
  }
  99% {
    left: 0;
  }
}

@keyframes tostart {
  75% {
    left: 0;
  }
  95% {
    left: -300%;
  }
  98% {
    left: -300%;
  }
  99% {
    left: 0;
  }
}

@keyframes snap {
  96% {
    scroll-snap-align: center;
  }
  97% {
    scroll-snap-align: none;
  }
  99% {
    scroll-snap-align: none;
  }
  100% {
    scroll-snap-align: center;
  }
 }


.banners {
	 position: relative;
	 filter: drop-shadow(0 0 10px #000 3);
	 height: 700px;
}
 .banners *::-webkit-scrollbar {
	 width: 0;
}
 .banners *::-webkit-scrollbar-track {
	 background: transparent;
}
 .banners *::-webkit-scrollbar-thumb {
	 background: transparent;
	 border: none;
}
 .banners * {
	 -ms-overflow-style: none;
}
 .banners__viewport, .banners__li {
	 list-style: none;
	 margin: 0;
	 padding: 0;
}
 .banners__viewport {
	 position: absolute;
	 overflow-y: hidden;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 display: flex;
	 overflow-x: scroll;
	 counter-reset: item;
	 scroll-behavior: smooth;
	 scroll-snap-type: x mandatory;
}
 .banners__li__img {
	 width: 100%;
	 height: 100%;
	 object-fit: cover;
}
 .banners__li__nav {
	 position: absolute;
	 top: 38%;
	 color: white;
	 display: grid;
	 justify-content: space-between;
	 grid-template-columns: auto auto;
	 width: 100%;
	 z-index: 99;
}
 .banners__li__nav a {
	 color: white;
}
 .banners__slide {
	 position: relative;
	 flex: 0 0 100%;
	 width: 100%;
	 background-color: #f99;
	 counter-increment: item;
}
 .banners .bannerOne ::ng-deep .bannerContent {
	 display: grid;
	 grid-template-rows: auto 1fr;
	 position: absolute;
	 top: 0;
	 width: 100%;
	 height: 100%;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSecOne {
	 padding: 1% 4%;
	 display: grid;
	 gap: 10%;
	 width: 15%;
	 text-align: center;
	 width: fit-content;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSecOne p {
	 margin: 0;
	 font-size: 24px;
	 letter-spacing: 0.7px;
	 color: white;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSecOne .contentSecOneSub {
	 font-size: 36px;
	 letter-spacing: 0.7px;
	 color: white;
	 display: flex;
	 align-items: center;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSecOne .contentSecOneSub span {
	 display: grid;
	 padding: 2px;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSecOne .contentSecOneSub span img {
	 width: 40px;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo {
	 display: grid;
	 grid-template-rows: auto auto 1fr;
	 justify-content: center;
	 margin: 0 auto 8%;
	 background: white;
	 width: fit-content;
	 padding: 16px 16px 0;
	 border-radius: 10px;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo h4 {
	 font-weight: normal;
	 margin: 0;
	 font-size: 24px;
	 letter-spacing: 0.7px;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo p {
	 font-style: italic;
	 letter-spacing: 0.7px;
	 margin: 7px 0;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSubOne {
	 width: 600px;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSubOne video {
	 object-fit: cover;
	 width: 100%;
	 height: 100%;
}
 .banners .bannerOne ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSubTwo {
	 display: flex;
	 justify-content: center;
	 font-size: 14px;
	 padding: 1%;
	 gap: 8%;
}
 .banners .bannerTwo ::ng-deep .bannerContent {
	 display: grid;
	 position: absolute;
	 top: 0;
	 width: 100%;
	 height: 100%;
}
 .banners .bannerTwo ::ng-deep .bannerContent .contentSecOne {
	 display: grid;
	 gap: 10%;
	 width: 15%;
	 text-align: left;
	 height: fit-content;
	 line-height: 0.8;
	 letter-spacing: 0.7px;
	 padding: 5% 8%;
}
 .banners .bannerTwo ::ng-deep .bannerContent .contentSecOne p {
	 font-size: 32px;
	 margin: 0;
}
 .banners .bannerTwo ::ng-deep .bannerContent .contentSecOne span {
	 font-size: 40px;
	 color: #c6601d;
}
 .banners .bannerThree ::ng-deep .bannerContent {
	 display: grid;
	 position: absolute;
	 justify-content: space-between;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 grid-template-columns: 40% 50%;
	 align-items: end;
	 grid-template-rows: 1fr 10%;
	 justify-content: end;
	 gap: 5%;
}
 .banners .bannerThree ::ng-deep .bannerContent .contentSecOne {
	 padding: 4%;
	 line-height: 40px;
	 background: linear-gradient(0deg, rgba(72, 70, 39, 1) 0%, rgba(72, 70, 39, 0.7) 40%, rgba(255, 255, 255, 0) 100%);
	 border-radius: 16px;
	 color: white;
	 font-size: 16px;
	 letter-spacing: 0.7px;
}
 .banners .bannerThree ::ng-deep .bannerContent .contentSecOne h4 {
	 font-size: 24px;
}
 .banners .bannerThree ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSub {
	 height: 400px;
	 border: 4px solid #e3b438;
	 padding: 4px;
}
 .banners .bannerThree ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSub video {
	 object-fit: cover;
	 width: 100%;
	 height: 100%;
}
 .banners .bannerThree ::ng-deep .bannerContent .contentSectionTwo .contentSecTwoSub img {
	 width: 100%;
	 height: 100%;
}
 .banners__slide:nth-child(even) {
	 background-color: #99f;
}
 .banners__snapper {
	 position: absolute;
	 top: 0;
	 left: 0;
	 width: 100%;
	 height: 100%;
	 scroll-snap-align: center;
}
 .banners__navigation {
	 position: absolute;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 text-align: center;
}
 .banners__navigation-button {
	 display: inline-block;
	 width: 25px;
	 background: white;
	 height: 3px;
	 border-radius: 4px;
	 border: none;
	 transition: transform 0.1s;
	 text-decoration: none;
}
 .banners__navigation-button::after {
	 width: 100%;
	 display: block;
	 content: '\00a0';
}
 .banners .navArrow {
	 height: fit-content;
	 width: fit-content;
	 font-size: 200px;
	 font-weight: 100;
	 opacity: 0.2;
}
 .banners .navArrow:hover {
	 opacity: 0.7;
}
 @media (hover: hover) {
	 .banners__snapper {
		 animation-name: tonext, snap;
		 animation-timing-function: ease;
		 animation-duration: 4s;
		 animation-iteration-count: infinite;
	}
	 .banners__slide:last-child .banners__snapper {
		 animation-name: tostart, snap;
	}
}
 @media (prefers-reduced-motion: reduce) {
	 .banners__snapper {
		 animation-name: none;
	}
}
 .banners:hover .banners__snapper, .banners:focus-within .banners__snapper {
	 animation-name: none;
}
 .banners__navigation-list {
	 display: flex;
	 justify-content: center;
	 gap: 10px;
	 padding: 2% 0;
}
 .banners__navigation-item {
	 display: inline-block;
}
 .banners__navigation-item .currentSlideBottomNav {
	 height: 5px;
	 width: 45px;
}
 .banners__viewport::before, .banners__viewport::after, .banners__prev, .banners__next {
	 position: absolute;
	 top: 0;
	 margin-top: 10%;
	 width: 4rem;
	 height: 4rem;
	 transform: translateY(-50%);
	 border-radius: 50%;
	 font-size: 0;
	 outline: 0;
}
 .banners__viewport::before, .banners__prev {
	 left: -1rem;
}
 .banners__viewport::after, .banners__next {
	 right: -1rem;
}


.food-list-view-section {
    padding-bottom: 140px;
}
 
</style>


   <?php 
        if(!isset($_SESSION["email"])) {
            header("location:index.php");
        }
   ?>
    
    <?php 
        if(isset($_GET["location"])) {
            $location = $_GET["location"]; 
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
                        
                        <div class="res-banner-center col-md-7" style="padding: 0;" >
                            
                            <section class="banners" aria-label="Gallery" 
                                     style="height:250px;"
                            >
                              <ol class="banners__viewport" 
                                  style="overflow-x:hidden;"
                              >
                              
                                  <li class="banners__li banners__slide" 
                                      id="slide1"
                                      style="border-radius: 0 0 6px 6px;"
                                  >
								  	<?php 
                                        $sqlBanner1 = "SELECT * FROM banners WHERE id = '1'";
                                        $resultBanner1 = $conn->query($sqlBanner1);
                                        if ($resultBanner1->num_rows > 0) {                               
                                        while($rowBanner1 = $resultBanner1->fetch_assoc()) { 
                                            $banner1 = $rowBanner1["banner"];
									?>  
								  	<img class="banners__li__img" 
                                           src="../images/banners/<?= $banner1; ?>" 
                                           alt=""
                                           style="border-radius: 0 0 6px 6px;" />
									<?php } } else { } ?>
                                    <div class="banners__snapper"></div>
                                  </li>
                                  <li class="banners__li banners__slide" 
                                      id="slide1"
                                      style="border-radius: 0 0 6px 6px;"
                                  >
								  	<?php 
                                        $sqlBanner2 = "SELECT * FROM banners WHERE id = '2'";
                                        $resultBanner2 = $conn->query($sqlBanner2);
                                        if ($resultBanner2->num_rows > 0) {                               
                                        while($rowBanner2 = $resultBanner2->fetch_assoc()) { 
                                            $banner2 = $rowBanner2["banner"];
									?>  
                                      <img class="banners__li__img" 
                                           src="../images/banners/<?= $banner2; ?>" 
                                           alt=""
                                           style="border-radius: 0 0 6px 6px;" />
									<?php } } else { } ?>
                                    <div class="banners__snapper"></div>
                                  </li>
                                  <li class="banners__li banners__slide" 
                                      id="slide1"
                                      style="border-radius: 0 0 6px 6px;"
                                  >
								  	<?php 
                                        $sqlBanner3 = "SELECT * FROM banners WHERE id = '3'";
                                        $resultBanner3 = $conn->query($sqlBanner1);
                                        if ($resultBanner3->num_rows > 0) {                               
                                        while($rowBanner3 = $resultBanner3->fetch_assoc()) { 
                                            $banner3 = $rowBanner3["banner"];
									?>  
                                      <img class="banners__li__img" 
                                           src="../images/banners/<?= $banner3; ?>" 
                                           alt=""
                                           style="border-radius: 0 0 6px 6px;" />
									<?php } } else { } ?>
                                    <div class="banners__snapper"></div>
                                  </li>
                                  
                              </ol>
                            </section>
                            
                            <form action="products.php" class="onLocationSelectForm" method="get"
                                    style=""
                            >
                            <p class="res-banner-txt" style="text-align: center;color: black;background: white;border-radius: 4px;padding: 2%;height: fit-content;border: 1px solid gray;
                                                            margin: 2%;
                                                            float: right;
                                                            font-size: -webkit-xxx-large;
                                                            width: 150px;">
                                <select name="location" class="form-control mb-2 onLocationSelect"
                                    style="padding: 0;
                                            height: fit-content;
                                            border: none;
                                            font-size:16px;"
                                >
                                    <option value="<?php echo $vendorlocation; ?>" ><?php echo $vendorlocation; ?></option>
                                    <?php
										$sqlLocations = "SELECT DISTINCT(location) FROM vendors";
										$resultLocations = $conn->query($sqlLocations);
										if($resultLocations->num_rows > 0) {
										while($rowLocations = $resultLocations->fetch_assoc()) {
									?>
										<option value="<?= $rowLocations['location']; ?>"><?= $rowLocations['location']; ?></option>
									<?php
										} } else { } 
									?>
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
                                    style="background: #ffc1c0;border-radius: 8px;display: grid;align-items: center;justify-content: center;text-align: center;"
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
                                                        style="border-radius: 6px;margin:0;cursor:pointer;text-align:center;padding: 6px 0px;" 
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
                          
         
                        
                        
                        
                        <?php } } else { 
                        
                            header("location:index.php");
                        
                        } ?>
                        
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
