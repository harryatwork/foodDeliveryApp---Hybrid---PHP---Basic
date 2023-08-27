<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                    
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Completed Orders</strong></p>
									<?php
										$sqlstep3 = "SELECT COUNT(DISTINCT o_id) AS total FROM orders WHERE status = 'Delivered'";
										$rowNumstep3 = mysqli_query($conn, $sqlstep3);
										$countstep3 = mysqli_fetch_assoc($rowNumstep3);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep3["total"]; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i><a href="orders.php">Detailed Info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                       
                                    </div>
                                </div>

                                <?php
                                   $total = 0;
                                   $subTotal = 0;
                                   $sql55 = "SELECT * FROM orders WHERE status = 'Delivered'";
                                   $result55 = $conn->query($sql55);
                                   if ($result55->num_rows > 0) {                               
                                   while($row55 = $result55->fetch_assoc()) { 
                                       $price = $row55["price"];
                                       $quantity = $row55["quantity"];
                                       $date = $row55["date"];
                                       $couponValue = $row55["couponValue"];
                                       $subTotal = $price * $quantity;
                                       $total = $total + $subTotal;
                                   
                                   } } else { } 

                                ?>

                                <div class="card-content">
                                    <p class="category"><strong>Revenue</strong></p>
                                    <h3 class="card-title">Rs.<?= $total; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info">info</i><a href="orders.php">Status wise Revenue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Users</strong></p>
									<?php
										$sqlstep3 = "SELECT COUNT(*) AS total FROM users";
										$rowNumstep3 = mysqli_query($conn, $sqlstep3);
										$countstep3 = mysqli_fetch_assoc($rowNumstep3);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep3["total"]; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i><a href="users">User Wise Reports</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        
<?php include('footer.php'); ?>