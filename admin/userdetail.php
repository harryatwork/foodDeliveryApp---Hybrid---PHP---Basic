<?php include('header.php'); ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card" id="profile-main">
							<?php $u_id = $_GET["id"]; ?>
							<?php 
								$sql5 = "SELECT * FROM users WHERE id = '$u_id'";
								$result5 = $conn->query($sql5);
								if ($result5->num_rows > 0) {                               
								while($row5 = $result5->fetch_assoc()) { 
							?>	
                                <div class="card-content">
                                    <h3><?php echo $row5["fname"]; ?> Profile</h3>
                                    <div role="tabpanel">
                                        <ul class="nav nav-pills">
                                            <li class="active"><a href="#profile11" aria-controls="profile11" role="tab" data-toggle="tab">Profile</a>
                                            </li>
                                            <!--<li><a href="#activities11" aria-controls="messages11" role="tab" data-toggle="tab">Purchases</a>
                                            </li>-->

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
                                                                    <p><strong>First Name</strong></p>
                                                                    <!-- <p><strong>Last Name</strong></p> -->
                                                                    <p><strong>No. Of Purchases</strong></p>
                                                                    <p><strong>Customer Since</strong></p>
                                                                </div>
                                                                <div class="col-sm-6 p-10 p-5">
                                                                    <p><?php echo $row5["fname"]; ?></p>
																	<?php
																		$sqlstep1 = "SELECT COUNT(DISTINCT o_id) AS total FROM orders WHERE status = 'Delivered' AND u_id = '$u_id'";
																		$rowNumstep1 = mysqli_query($conn, $sqlstep1);
																		$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
																	?>
                                                                    <p><a class="hrefbox"><?php echo  $countstep1["total"]; ?></a></p>
                                                                    <p><?php echo $row5["date"]; ?></p>
                                                                </div>
                                                            </div>
                                                            <h4>Contact</h4>
                                                            <hr>
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <p><strong>Mobile</strong></p>
                                                                    <p><strong>Email</strong></p>
                                                                    <p><strong>City</strong></p>
                                                                </div>
                                                                <div class="col-sm-6 p-10">
                                                                    <p><?php echo $row5["mobile"]; ?></p>
                                                                    <p><?php echo $row5["email"]; ?></p>
                                                                    <p><?php echo $row5["area"]; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
													<!--
                                                    <div class="col-sm-6">
                                                        <div class="p-15">
                                                            <h4>Interests</h4>
                                                            <hr>
                                                            <p>
                                                                <Strong>Data Analytics</strong>
                                                            </p>
                                                            <p>
                                                                <Strong>Marketing</strong>
                                                            </p>
                                                            <p>
                                                                <Strong>Machine Learning</strong>
                                                            </p>
                                                            <p>
                                                                <Strong>Travel</strong>
                                                            </p>
                                                            <p>
                                                                <Strong>Golf</strong>
                                                            </p>
                                                            <p>
                                                                <Strong>Guitar</strong>
                                                            </p>
                                                            <p>
                                                                <Strong>Reading</strong>
                                                            </p>

                                                        </div>
                                                    </div>
													-->
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
                                                        <div class="togglebutton m-t-30">
                                                            <label>
																<input type="checkbox"> Deactivate Account
															</label>
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
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="../images/users/<?php echo $row5["pic"]; ?>" onerror="this.src='assets/img/faces/avatar.png';" />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <h6 class="category text-gray">User</h6>
                                    <h4 class="card-title"><?php echo $row5["fname"]; ?></h4>
									<!--
                                    <p class="description">
                                        Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                    </p>
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