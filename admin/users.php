<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">
					<!--<a href="useradd" class="btn btn-success" style="width:100%;">Add New User</a>-->
                    <div class="row">
					
					<?php 
                                $sql2 = "SELECT DISTINCT area FROM users";
								$result2 = $conn->query($sql2);
								if ($result2->num_rows > 0) { 
                                while($row2 = $result2->fetch_assoc()) { 
									$area = $row2['area'];
						?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong><?php echo $area; ?> Wise Users</strong></p>
									<?php
										$sqlstep1 = "SELECT COUNT(*) AS total FROM users WHERE area = '$area'";
										$rowNumstep1 = mysqli_query($conn, $sqlstep1);
										$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep1["total"]; ?> Users</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
									<i class="material-icons text-info">info</i> <a href="userssub?id=<?php echo $area; ?>">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php } } else { } ?>
                        
                    </div>

                    
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>