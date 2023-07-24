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
                                    <p class="category"><strong>Vendor Wise Products</strong></p>
									<?php
										$sqlstep1 = "SELECT COUNT(*) AS total FROM vendors";
										$rowNumstep1 = mysqli_query($conn, $sqlstep1);
										$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep1["total"]; ?> Vendors
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
									<i class="material-icons text-info">info</i> <a href="productsvsub">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Category Wise Products</strong></p>
									<?php
										$sqlstep2 = "SELECT COUNT(*) AS total FROM cat";
										$rowNumstep2 = mysqli_query($conn, $sqlstep2);
										$countstep2 = mysqli_fetch_assoc($rowNumstep2);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep2["total"]; ?> Categories
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
									<i class="material-icons text-info">info</i> <a href="productscsub">View Details</a>
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
                                    <p class="category"><strong>All Products</strong></p>
									<?php
										$sqlstep3 = "SELECT COUNT(*) AS total FROM products WHERE status = 'Active'";
										$rowNumstep3 = mysqli_query($conn, $sqlstep3);
										$countstep3 = mysqli_fetch_assoc($rowNumstep3);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep3["total"]; ?> Products</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info">info</i> <a href="productspresub?id=active&id2=status">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>