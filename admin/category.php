<?php include('header.php'); ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" id="profile-main">

                                <div class="card-content">
                                    <h3>Add Category</h3>
                                    <div role="tabpanel">
                                        

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
															<form action="addcategory" method="post">
																<label class="control-label">
																	Type Category Name
																	<small>*</small>
																</label>
																<input class="form-control" name="category" type="text" required="true" />
																<button class="btn btn-success">Add</button>
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
																	$sql5 = "SELECT * FROM cat";
																	$result5 = $conn->query($sql5);
																	if ($result5->num_rows > 0) {                               
																	while($row5 = $result5->fetch_assoc()) { 
																		$category = $row5["name"];
															?>
															
                                                             <p style="display:block-inline;">
                                                                <Strong><?php echo $category; ?></strong> 
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<a class="btn btn-success" href="removecategory?id=<?php echo $row5["id"]; ?>" style="display:block-inline;">Remove</a>
                                                            </p>
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
                        </div>
                    </div>
					

					
					
                </div>
            </div>

			
			<?php include('footer.php'); ?>