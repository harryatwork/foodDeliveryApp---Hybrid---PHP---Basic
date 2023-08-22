<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">
							<?php 
								$email = $_SESSION['email'];
								$sqlnesu = "SELECT * FROM vendors WHERE email = '$email' ";
								$resultnesu = $conn->query($sqlnesu);
								if ($resultnesu->num_rows > 0) {   
								while($rownesu = $resultnesu->fetch_assoc()) {  
									$v_id = $rownesu["id"]; 
							?>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Pending Orders</strong></p>
									<?php
										$sqlstep1 = "SELECT COUNT(DISTINCT o_id) AS total FROM orders WHERE status = 'Confirmed' AND v_id = '$v_id'";
										$rowNumstep1 = mysqli_query($conn, $sqlstep1);
										$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep1["total"]; ?> 
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
									<i class="material-icons text-info">info</i> <a href="orderssub.php?id=Confirmed">View Details</a>
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
                                    <p class="category"><strong>Running Orders</strong></p>
									<?php
										$sqlstep2 = "SELECT COUNT(DISTINCT o_id) AS total FROM orders WHERE status = 'Running' AND v_id = '$v_id'";
										$rowNumstep2 = mysqli_query($conn, $sqlstep2);
										$countstep2 = mysqli_fetch_assoc($rowNumstep2);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep2["total"]; ?> </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info">info</i> <a href="orderssub.php?id=Running">View Details</a>
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
                                    <p class="category"><strong>Completed Orders</strong></p>
									<?php
										$sqlstep3 = "SELECT COUNT(DISTINCT o_id) AS total FROM orders WHERE status = 'Delivered' AND v_id = '$v_id'";
										$rowNumstep3 = mysqli_query($conn, $sqlstep3);
										$countstep3 = mysqli_fetch_assoc($rowNumstep3);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep3["total"]; ?> </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info">info</i> <a href="orderssub.php?id=Delivered">View Details</a>
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
                                    <p class="category"><strong>Cancelled Orders</strong></p>
									<?php
										$sqlstep4 = "SELECT COUNT(DISTINCT o_id) AS total FROM orders WHERE status = 'Cancelled' AND v_id = '$v_id'";
										$rowNumstep4 = mysqli_query($conn, $sqlstep4);
										$countstep4 = mysqli_fetch_assoc($rowNumstep4);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep4["total"]; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info">info</i> <a href="orderssub.php?id=Cancelled">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

					<?php } } else { } ?>
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>