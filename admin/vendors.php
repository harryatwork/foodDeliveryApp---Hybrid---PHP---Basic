<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">
					<!--<a href="vendoradd" class="btn btn-success" style="width:100%;">Add New Vendor</a>-->
                    <div class="row">
					
						
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-rose">
                                      
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>All Vendors</strong></p>
									<?php
										$sqlstep2 = "SELECT COUNT(*) AS total FROM vendors WHERE status = 'Active'";
										$rowNumstep2 = mysqli_query($conn, $sqlstep2);
										$countstep2 = mysqli_fetch_assoc($rowNumstep2);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep2["total"]; ?> Vendors</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info">info</i> <a href="vendorssub?id=all">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>