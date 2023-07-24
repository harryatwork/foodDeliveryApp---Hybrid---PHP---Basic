<?php include('header.php'); ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" id="profile-main">

                                <div class="card-content">
                                    <h3>Update Delivery Charges</h3>
                                    <div role="tabpanel">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="profile11">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="p-15">
                                                            <div class="row m-l-5">
                                                            <div class="form-group label-floating">
															<form action="updateothers.php" method="post">
																<label class="control-label">
																	Type Amount for every 1 Kilo Meter (in Rupees)
																	<small>*</small>
																</label>
                                							<?php 
                                								$sql5 = "SELECT * FROM others WHERE id = '1'";
                                								$result5 = $conn->query($sql5);
                                								if ($result5->num_rows > 0) {                               
                                								while($row5 = $result5->fetch_assoc()) { 
                                									$delivery = $row5["value"];
                                							?>
																<input class="form-control" name="value" value="<?php echo $delivery; ?>" type="number" required="true" />
																<input type="hidden" name="id" value="1" />
																<button type="submit" class="btn btn-success">Update</button>
															<?php } } else { } ?>
															</form>
															</div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                 <div class="card-content">
                                    <h3>Update Delivery Person Charges</h3>
                                    <div role="tabpanel">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="profile11">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="p-15">
                                                            <div class="row m-l-5">
                                                            <div class="form-group label-floating">
															<form action="updateothers.php" method="post">
																<label class="control-label">
																	Type Amount for Delivery Person Charge for Every Kilometer he Travels For Delivery (in Rupees)
																	<small>*</small>
																</label>
                                							<?php 
                                								$sql5 = "SELECT * FROM others WHERE id = '2'";
                                								$result5 = $conn->query($sql5);
                                								if ($result5->num_rows > 0) {                               
                                								while($row5 = $result5->fetch_assoc()) { 
                                									$delivery = $row5["value"];
                                							?>
																<input class="form-control" name="value" value="<?php echo $delivery; ?>" type="number" required="true" />
																<input type="hidden" name="id" value="2" />
																<button type="submit" class="btn btn-success">Update</button>
															<?php } } else { } ?>
															</form>
															</div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
					

					
					
                </div>
            </div>

			
			<?php include('footer.php'); ?>