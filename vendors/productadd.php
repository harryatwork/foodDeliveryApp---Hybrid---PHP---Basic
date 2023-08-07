<?php include('header.php'); ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" id="profile-main">

                                <div class="card-content">
                                    <h3>Add Product</h3>
                                    <div role="tabpanel">
                             <?php 
								$email = $_SESSION['email'];
								$sqlnesu = "SELECT * FROM vendors WHERE email = '$email' ";
								$resultnesu = $conn->query($sqlnesu);
								if ($resultnesu->num_rows > 0) {   
								while($rownesu = $resultnesu->fetch_assoc()) {  
									$v_id = $rownesu["id"]; 
									$comm = $rownesu["comm"]; 
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
                                                            
															<form action="addproduct.php" method="post" enctype="multipart/form-data">
															
															<div class="form-group label-floating">
																<label class="control-label">
																	Type Product Name
																	<small>*</small>
																</label>
																<input class="form-control" name="name" type="text" required="true" />
															</div>

															<div class="form-group label-floating">
																<label class="control-label">
																	Choose Category
																	<small>*</small>
																</label>
																<select class="form-control" name="category" required="true">
																	<?php 
																			$sql5 = "SELECT * FROM cat";
																			$result5 = $conn->query($sql5);
																			if ($result5->num_rows > 0) {                               
																			while($row5 = $result5->fetch_assoc()) { 
																				$category = $row5["name"];
																	?>
																	<option value="<?php echo $category; ?>" ><?php echo $category; ?></option>
																	<?php } } else { } ?>
																</select>
															</div>
															
														
														
															<input type="hidden" name="pcom" value="<?php echo $comm; ?>" />
															
														
															
														
															<div class="form-group label-floating">
																<label class="control-label">
																	Type Unit Product Price in Ruppes:
																	<small>*</small>
																</label>
																<input class="form-control" name="price" type="number" required="true" />
															</div>
															
															<div class="form-group label-floating">
																<label class="control-label">
																	Type Unit Product Quantity (Grams (OR) No.)
																	<small>*</small>
																</label>
																<input class="form-control" name="quantity" type="number" required="true"/>
															</div>

															<div class="form-group label-floating">
																<label class="control-label">
																	Description
																	<small>*</small>
																</label>
																<textarea class="form-control" name="description" type="text" required="true"></textarea>
															</div>
														
															<input type="hidden" name="v_id" value="<?php echo $v_id; ?>" />
															
															<br/>

															<input type="file" name="fileToUpload" id="fileToUpload" />
															<hr>
															<br>
															<br><br>
																<button type="submit" class="btn btn-success">Add Product</button>
															</form>
															 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<hr>
								<?php } } else { } ?>
												
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