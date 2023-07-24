<?php include('header.php'); ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" id="profile-main">

                                <div class="card-content">
                                    <h3>Add Pincodes</h3>
                                    <div role="tabpanel">
                                        
<?php 
								$email = $_SESSION['email'];
								$sqlnesu = "SELECT * FROM vendors WHERE email = '$email' ";
								$resultnesu = $conn->query($sqlnesu);
								if ($resultnesu->num_rows > 0) {   
								while($rownesu = $resultnesu->fetch_assoc()) {  
									$v_id = $rownesu["id"]; 
							?>

                                        <div class="tab-content">

                                            <div role="tabpanel" class="tab-pane active" id="profile11">
											<!--
                                                <p>Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis..Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo
                                                    dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis..</p>
											-->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="p-15">
                                                            <div class="row m-l-5">
                                                            <div class="form-group label-floating">
															<form action="addpincodes.php" method="post">
																<label class="control-label">
																	Type Pin Codes You Can Deliver
																	<small>*</small>
																</label>
																<input class="form-control" name="pincode" type="number" pattern="\d*" maxlength="6" required="true" />
																<input type="hidden" name="v_id" value="<?php echo $v_id; ?>" />
																<button type="submit" class="btn btn-success">Add</button>
															</form>
															</div>  
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<hr>
												<hr>
												<div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="p-15">
                                                            <div class="row m-l-5" style="display:block-inline;">
															
															<?php 
																	$sql5 = "SELECT * FROM pincode WHERE v_id = '$v_id'";
																	$result5 = $conn->query($sql5);
																	if ($result5->num_rows > 0) {                               
																	while($row5 = $result5->fetch_assoc()) { 
																		$pincode = $row5["pincode"];
																		$v_id = $row5["v_id"];
															?>
															
                                                             <p style="display:block-inline;">
                                                                <Strong><?php echo $pincode; ?></strong> 
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<a class="btn btn-success" href="removepincodes.php?id=<?php echo $row5["id"]; ?>" style="display:block-inline;">Remove</a>
                                                            </p>
															<hr>
															
															<?php } } else { } ?>
															
															
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												
                                            </div>
                                        </div>
                                        
                                        <?php } } else { } ?>
                                        
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
					

					
					
                </div>
            </div>

			
			<?php include('footer.php'); ?>