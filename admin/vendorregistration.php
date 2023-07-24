<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
					<?php 
                                $sql2 = "SELECT DISTINCT city FROM vendors WHERE status != 'Active'";
								$result2 = $conn->query($sql2);
								if ($result2->num_rows > 0) { 
                                while($row2 = $result2->fetch_assoc()) { 
									$city = $row2['city'];
						?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong><?php echo $city; ?></strong></p>
                                   <?php
										$sqlstep1 = "SELECT COUNT(*) AS total FROM vendors WHERE status != 'Active' AND city = '$city'";
										$rowNumstep1 = mysqli_query($conn, $sqlstep1);
										$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep1["total"]; ?> Vendors</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
									<i class="material-icons text-info">info</i> <a href="vendorregistrationsub?id=<?php echo $city; ?>">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php } } else { } ?>
                        
                        
                    </div>

                    
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>