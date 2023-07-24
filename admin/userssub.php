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
                                    <h4 class="card-title"><?php echo $city; ?> Wise Users</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <th>User ID</th>
                                            <th>Name</th>
											<th>No. Of Orders</th>
											<th>Location</th>
											<th>Registered at</th>
                                        </thead>
                                        <tbody>
										<?php 
												$sql4 = "SELECT * FROM users WHERE area = '$city' ";
												$result4 = $conn->query($sql4);
												if ($result4->num_rows > 0) {                               
												while($row4 = $result4->fetch_assoc()) {
													$id = $row4["id"];
													$fname = $row4["fname"];
													$city = $row4["area"];
													$date = $row4["date"];
										?>
                                            <tr>
                                                <td>1</td>
												<td><a href="userdetail?id=<?php echo $id; ?>" class="hrefbox"><?php echo $fname; ?></a></td>
												<?php
													$sqlstep1 = "SELECT COUNT(*) AS total FROM orders WHERE u_id = '$id'";
													$rowNumstep1 = mysqli_query($conn, $sqlstep1);
													$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
												?>
												<td><a  class="hrefbox"><?php echo  $countstep1["total"]; ?></a></td>
												<td><?php echo $city; ?></td>
                                                <td><?php echo $date; ?></td>
                                            </tr>
										<?php } } else { } ?>	
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>