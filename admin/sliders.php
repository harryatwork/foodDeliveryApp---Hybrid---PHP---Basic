<?php include('header.php'); ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card" id="profile-main">

                                <div class="card-content">
                                    <h3>Slider #1</h3>
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
															<form action="bannerupload" method="post" enctype="multipart/form-data" >
                                                             
																<label class="control-label">
																	Click to Upload Slider #1
																	<small>*</small>
																</label>
																<input type="hidden" name="id" value="1" />
																<input name="file" type="file" required="true" />
															
															<br>
															<button class="btn btn-success" type="submit" >Upload</button>
															</form>
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
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-">
                                    <a href="#pablo">
									<?php 
                                        $sql5 = "SELECT * FROM banners WHERE id = '1'";
                                        $result5 = $conn->query($sql5);
                                        if ($result5->num_rows > 0) {                               
                                        while($row5 = $result5->fetch_assoc()) { 
                                            $banner = $row5["banner"];
									?>
                                        <img class="img" src="../images/banners/<?php echo $banner; ?>" style="height:170px;" />
									<?php } } else { } ?>
                                    </a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
					
					
					<div class="row">
                        <div class="col-md-8">
                            <div class="card" id="profile-main">

                                <div class="card-content">
                                    <h3>Slider #2</h3>
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
															<form action="bannerupload" method="post" enctype="multipart/form-data" >
                                                             
																<label class="control-label">
																	Click to Upload Slider #2
																	<small>*</small>
																</label>
																<input type="hidden" name="id" value="2" />
																<input name="file" type="file" required="true" />
															  
															<br>
															<button class="btn btn-success" type="submit" >Upload</button>
															</form>  
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
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-">
                                    <a href="#pablo">
                                       <?php 
																	$sql5 = "SELECT * FROM banners WHERE id = '2'";
																	$result5 = $conn->query($sql5);
																	if ($result5->num_rows > 0) {                               
																	while($row5 = $result5->fetch_assoc()) { 
																		$banner = $row5["banner"];
															?>
                                        <img class="img" src="../images/banners/<?php echo $banner; ?>" style="height:170px;" />
									<?php } } else { } ?>
                                    </a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card" id="profile-main">

                                <div class="card-content">
                                    <h3>Slider #3</h3>
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
															<form action="bannerupload" method="post" enctype="multipart/form-data" >
                                                             
																<label class="control-label">
																	Click to Upload Slider #2
																	<small>*</small>
																</label>
																<input type="hidden" name="id" value="3" />
																<input name="file" type="file" required="true" />
															  
															<br>
															<button class="btn btn-success" type="submit" >Upload</button>
															</form>  
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
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-">
                                    <a href="#pablo">
                                       <?php 
																	$sql5 = "SELECT * FROM banners WHERE id = '3'";
																	$result5 = $conn->query($sql5);
																	if ($result5->num_rows > 0) {                               
																	while($row5 = $result5->fetch_assoc()) { 
																		$banner = $row5["banner"];
															?>
                                        <img class="img" src="../images/banners/<?php echo $banner; ?>" style="height:170px;" />
									<?php } } else { } ?>
                                    </a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
					
					
                </div>
            </div>

			
			<?php include('footer.php'); ?>