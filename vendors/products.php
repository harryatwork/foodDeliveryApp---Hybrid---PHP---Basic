<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">
					<a href="productadd.php" class="btn btn-success" style="width:100%;">Add New Product</a>
                    <div class="row">
					<?php 
								$email = $_SESSION['email'];
								$sqlnesu = "SELECT * FROM vendors WHERE email = '$email' ";
								$resultnesu = $conn->query($sqlnesu);
								if ($resultnesu->num_rows > 0) {   
								while($rownesu = $resultnesu->fetch_assoc()) {  
									$v_id = $rownesu["id"]; 
							?>
					<?php 
												$sql5 = "SELECT * FROM cat";
												$result5 = $conn->query($sql5);
												if ($result5->num_rows > 0) {                               
												while($row5 = $result5->fetch_assoc()) { 
													$category = $row5["name"];
										?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong><?php echo $category; ?></strong></p>
									<?php
										$sqlstep1 = "SELECT COUNT(*) AS total FROM products WHERE cat = '$category' AND v_id = '$v_id'";
										$rowNumstep1 = mysqli_query($conn, $sqlstep1);
										$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep1["total"]; ?> Products
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
									<i class="material-icons text-info">info</i> <a href="productssub.php?id=<?php echo $category; ?>">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php } } else { } ?>

                        <?php } } else { } ?>
                    </div>

                    
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>