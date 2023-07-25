<?php include('header_stores.php'); ?>
<link href="assets/user/css/swiggy.css" rel="stylesheet">

<div class="_3tDvm ">
    <div class="v6luz"></div>
    <div class="_2QhOV _3glSS">
        <div class="_3R9IF">
            <div class="_2gu8R">
                <ul>
                    <li class="awo_x _1B5rE"><a href="orders.php"><span class="icon-orders _3rA45 _34BwO"></span><span class="_1ZYny ko2i4">Orders</span></a></li>
                    <li class="awo_x"><a href="address.php"><span class="icon-favourites _3rA45"></span><span class="_1ZYny">Address</span></a></li>
                </ul>
            </div>
            <div class="_1stFr">
                <div>
                    <div>
                        <div class="_3lCtm"> Previous Orders </div>
                        <div>
                            
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
                                $sql2 = "SELECT * FROM orders WHERE u_id = '$u_id' ";
								$result2 = $conn->query($sql2);
								if ($result2->num_rows > 0) {   
                                while($row2 = $result2->fetch_assoc()) {   
									$o_id = $row2["id"];
									$v_id = $row2["v_id"];
									$p_id = $row2["p_id"];
									$da_id = $row2["daid"];
									$price = $row2["price"];
									$status = $row2["status"];
									$dstatus = $row2["dstatus"];
									$date = $row2["date"];
						?>    
						<?php 
                                $sql3 = "SELECT * FROM orders WHERE id = '$p_id' ";
								$result3 = $conn->query($sql3);
								if ($result3->num_rows > 0) {   
                                while($row3 = $result3->fetch_assoc()) {   
									$p_id = $row3["id"];
									$name = $row3["name"];
						?>
                        
                            <div class="_3xMk0">
                                <div class="g28rk">
                                    <div class="_359Fc"><img class="_2tuBw _12_oN" height="200" width="300" alt="" src="images/products/example.png"></div>
                                    <div class="_2XWVq">
                                        <div class="_3h4gz"><?php echo $name; ?></div>
                                        <div class="_2haEe"><?php echo $userlocation; ?></div>
                                        <div class="_2uT6l">ORDER #<?php echo $o_id; ?> | <?php echo $date; ?></div>
                                        <div class="_2fkm7"><span>Total Paid: <span class="_3Hghg"> <?php echo $price; ?> </span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="_3SKK0">
                                    <div class="nRCg_">Order Status :   <a class="_3PUy8 f4Ovn"><?php echo $dstatus; ?></a></div>
                                </div>
                            </div>
                        
                        <?php } } else { } ?>
                        <?php } } else { } ?>
                        <?php } } else { } ?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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



</body>

</html>
