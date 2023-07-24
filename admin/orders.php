<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">

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
										$sqlstep1 = "SELECT COUNT(*) AS total FROM orders WHERE dstatus = 'Pending'";
										$rowNumstep1 = mysqli_query($conn, $sqlstep1);
										$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep1["total"]; ?> 
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
									<i class="material-icons text-info">info</i> <a href="orderssub?id=Pending">View Details</a>
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
										$sqlstep2 = "SELECT COUNT(*) AS total FROM orders WHERE dstatus != 'Delivered'";
										$rowNumstep2 = mysqli_query($conn, $sqlstep2);
										$countstep2 = mysqli_fetch_assoc($rowNumstep2);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep2["total"]; ?> </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info">info</i> <a href="orderssub?id=Running">View Details</a>
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
										$sqlstep3 = "SELECT COUNT(*) AS total FROM orders WHERE dstatus = 'Delivered'";
										$rowNumstep3 = mysqli_query($conn, $sqlstep3);
										$countstep3 = mysqli_fetch_assoc($rowNumstep3);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep3["total"]; ?> </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info">info</i> <a href="orderssub?id=Delivered">View Details</a>
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
										$sqlstep4 = "SELECT COUNT(*) AS total FROM orders WHERE status = 'Cancelled'";
										$rowNumstep4 = mysqli_query($conn, $sqlstep4);
										$countstep4 = mysqli_fetch_assoc($rowNumstep4);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep4["total"]; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info">info</i> <a href="orderssub?id=Cancelled">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>