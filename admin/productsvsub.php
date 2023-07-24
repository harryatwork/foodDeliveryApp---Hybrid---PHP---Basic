<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
					
					<?php 
												$sql5 = "SELECT * FROM vendors";
												$result5 = $conn->query($sql5);
												if ($result5->num_rows > 0) {                               
												while($row5 = $result5->fetch_assoc()) { 
													$v_id = $row5["id"];
													$business = $row5["business"];
										?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong><?php echo $business; ?></strong></p>
									<?php
										$sqlstep1 = "SELECT COUNT(*) AS total FROM products WHERE v_id = '$v_id'";
										$rowNumstep1 = mysqli_query($conn, $sqlstep1);
										$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep1["total"]; ?> Products
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
									<i class="material-icons text-info">info</i> <a href="productspresub?id=<?php echo $v_id; ?>&id2=vendors">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
								<?php } } else { } ?>
                        
                    </div>

                    
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>