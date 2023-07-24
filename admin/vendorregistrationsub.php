<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">

				<?php 
					$city = $_GET["id"]; 
				?>
                    

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title"><?php echo $city; ?> Wise Vendors</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <th>ID</th>
                                            <th>Business</th>
                                            <th>Vendor</th>
											<th>Mobile</th>
											<th>Email</th>
											<th>City</th>
											<th>Date</th>
											<th>Action</th>
                                        </thead>
                                        <tbody>
										<?php 
												$sql5 = "SELECT * FROM vendors WHERE status != 'Active' AND city = '$city'";
												$result5 = $conn->query($sql5);
												if ($result5->num_rows > 0) {                               
												while($row5 = $result5->fetch_assoc()) { 
													$id = $row5["id"];
													$business = $row5["business"];
													$name = $row5["aperson"];
													$mobile = $row5["mobile"];
													$email = $row5["email"];
													$city = $row5["city"];
													$date = $row5["date"];
											?>			
                                            <tr>
                                                <td><?php echo $id; ?></td>
												<td><?php echo $business; ?></td>
												<td><?php echo $name; ?></td>
                                                <td><?php echo $mobile; ?></td>
												<td><?php echo $email; ?></td>
												<td><?php echo $city; ?></td>
                                                <td><?php echo $date; ?></td>
												<td>
													<a class="btn btn-success" href="acceptvendorregistration?id=<?php echo $id; ?>">
														<i class="material-icons">check</i>
													</a>
													<a class="btn btn-danger" href="rejectvendorregistration?id=<?php echo $id; ?>">
														<i class="material-icons">close</i>
													</a>
												</td>
                                            </tr>
											<?php } } else {  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>