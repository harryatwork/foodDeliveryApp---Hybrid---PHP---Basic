<?php include('header.php'); ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card" id="profile-main">
							<?php $p_id = $_GET["id"]; ?>
							<?php 
								$sql5 = "SELECT * FROM products WHERE id = '$p_id'";
								$result5 = $conn->query($sql5);
								if ($result5->num_rows > 0) {                               
								while($row5 = $result5->fetch_assoc()) { 
									$v_id = $row5["v_id"];
									$p_id = $row5["id"];
									$name = $row5["name"];
									$date = $row5["date"];
									$status = $row5["status"];
							?>	
                                <div class="card-content">
                                    <h3><?php echo $row5["name"]; ?> Details</h3>
                                    <div role="tabpanel">
                                        <ul class="nav nav-pills">
                                            <li class="active"><a href="#profile11" aria-controls="profile11" role="tab" data-toggle="tab">General</a>
                                            </li>
                                            <!--<li><a href="#activities11" aria-controls="messages11" role="tab" data-toggle="tab">Purchases</a>
                                            </li>-->
										
                                            
											<?php if($status == 'Active'){ }else { ?> 
												<a href="activateproduct?id=<?php echo $p_id; ?>" class="btn btn-success">
													<span class="btn-label">
														<i class="material-icons">check</i>
													</span>
													Activate Product
												</a>
											<?php } ?>
                                        </ul>

                                        <div class="tab-content">

                                            <div role="tabpanel" class="tab-pane active" id="profile11">
											<!--
                                                <p>Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis..Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo
                                                    dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis..</p>
											-->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="p-15">
                                                            <h4>General</h4>
                                                            <hr>
                                                            <div class="row m-l-5">
                                                                <div class="col-sm-6 p-5">
                                                                    <p><strong>Product Name</strong></p>
                                                                    <p><strong>Category</strong></p>
																	<p><strong>Price</strong></p>
                                                                    <p><strong>No. Of Purchases</strong></p>
                                                                    <p><strong>Added At</strong></p>
                                                                </div>
                                                                <div class="col-sm-6 p-10 p-5">
                                                                    <p><?php echo $row5["name"]; ?></p>
                                                                    <p><?php echo $row5["cat"]; ?></p>
																	<p>Rs.<?php echo $row5["price"]; ?></p>
																	<?php
																		$sqlstep1 = "SELECT COUNT(*) AS total FROM orders WHERE status = 'Confirmed' AND p_id = '$p_id'";
																		$rowNumstep1 = mysqli_query($conn, $sqlstep1);
																		$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
																	?>
                                                                    <p><a  class="hrefbox"><?php echo  $countstep1["total"]; ?></a></p>
                                                                    <p><?php echo $row5["date"]; ?></p>
                                                                </div>
                                                            </div>
                                                            <h4>Contact</h4>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <p><strong>Vendor</strong></p>
                                                                    <p><strong>Vendor Name</strong></p>
                                                                    <p><strong>Area</strong></p>
                                                                </div>
																<?php 
																	$sql1 = "SELECT * FROM vendors WHERE id = '$v_id'";
																	$result1 = $conn->query($sql1);
																	if ($result1->num_rows > 0) {                               
																	while($row1 = $result1->fetch_assoc()) { 
																?>
                                                                <div class="col-sm-6 p-10">
                                                                    <p><a href="vendordetail?id=<?php echo $v_id; ?>" class="hrefbox"><?php echo $row1["business"]; ?></a></p>
                                                                    <p><?php echo $row1["aperson"]; ?></p>
                                                                    <p><?php echo $row1["city"]; ?></p>
                                                                </div>
																<?php } } else { } ?>
                                                            </div>
															<div class="row">
															
															</div>
															
                                                        </div>
                                                    </div>
													
                                                   
													
													
													
                                                </div>
                                            </div>
											
											<!--
                                            <div role="tabpanel" class="tab-pane" id="activities11">
                                                <div class="widget p-25">

                                                    <div class="widget-body">
                                                        <div class="streamline sl-style-2">
                                                            <div class="sl-item sl-primary">
                                                                <div class="sl-content">
                                                                    <small class="text-muted">5 mins ago</small>
                                                                    <p>Williams has just joined Project X</p>
                                                                </div>
                                                            </div>
                                                            <div class="sl-item sl-danger">
                                                                <div class="sl-content">
                                                                    <small class="text-muted">25 mins ago</small>
                                                                    <p>Jane sent you a request to grant access to the project folder</p>
                                                                </div>
                                                            </div>
                                                            <div class="sl-item sl-success">
                                                                <div class="sl-content">
                                                                    <small class="text-muted">40 mins ago</small>
                                                                    <p>Kate added you to her team</p>
                                                                </div>
                                                            </div>
                                                            <div class="sl-item">
                                                                <div class="sl-content">
                                                                    <small class="text-muted">55</small>
                                                                    <p>John has finished his task</p>
                                                                </div>
                                                            </div>
                                                            <div class="sl-item sl-warning">
                                                                <div class="sl-content">
                                                                    <small class="text-muted">60 mins ago</small>
                                                                    <p>Jim shared a folder with you</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											-->
                                            <div role="tabpanel" class="tab-pane" id="settings11">
                                                <div class="widget p-25">
                                                    <div class="widget-body">
                                                      
													  <form method="POST" action="addproductaddonvalue.php" >

                                                        <div class="togglebutton m-t-30">
                                                            <label>
																<input type="number" name="vendor_value" value="<?php echo $row5["vendor_value"]; ?>" class="form-control" > Vendor Add On Value (In Rupees)
															</label>
                                                        </div>
														<input type="hidden" name="id" value="<?php echo $row5["id"]; ?>" />
														<div class="togglebutton m-t-30">
                                                            <label>
																<input type="number" name="referral_discount" value="<?php echo $row5["referral_discount"]; ?>" class="form-control" > User Referral Discount (In Rupees)
															</label>
                                                        </div>
                                                        
													<button class="form-control" style="border:1px solid gray; border-radius:5px; background-color:green; color:white;" type="submit" >Update</button>
                                                       
													</form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-">
                                    <a href="#pablo">
                                        <img class="img" src="../images/products/example.png" style="height:500px;" />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <h6 class="category text-gray"><?php echo $row5["cat"]; ?></h6>
                                    <h4 class="card-title"><?php echo $row5["name"]; ?></h4>
									
                                    <p class="description" style="text-align:justify;">
                                        <?php echo $row5["description"]; ?>
                                    </p>
									<!--
                                    <a href="#pablo" class="btn btn-rose btn-round">Follow</a>
									-->
                                </div>
                            </div>
                        </div>
						<?php } } else { } ?>
                    </div>
                </div>
            </div>

			
			<?php include('footer.php'); ?>