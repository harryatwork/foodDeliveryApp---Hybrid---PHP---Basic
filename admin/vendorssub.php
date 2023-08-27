<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">

                    <?php $getter = $_GET["id"]; ?>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
								<?php if($getter == 'all'){ ?>
                                    <h4 class="card-title"> All Vendors</h4>
								<?php } else { ?>
									<h4 class="card-title"><?php echo $getter; ?> Wise Vendors</h4>
								<?php } ?>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <th>Vendor ID</th>
                                            <th>Business Name</th>
                                            <th>Vendor Name</th>
                                            <th>No. Of Products</th>
											<th>No. Of Orders</th>
										<!--<th>Total Revenue</th>-->
											<th>Registered at</th>
                                        </thead>
                                        <tbody>
											<?php 
												$sql5 = "SELECT * FROM vendors WHERE status = 'Active'";
												$result5 = $conn->query($sql5);
												if ($result5->num_rows > 0) {                               
												while($row5 = $result5->fetch_assoc()) { 
													$v_id = $row5["id"];
													$business = $row5["business"];
													$city = $row5["city"];
													$date = $row5["date"];
											?>										
                                            <tr>
                                                <td><?php echo $v_id; ?></td>
												<td><a href="vendordetail?id=<?php echo $v_id; ?>" class="hrefbox"><?php echo $business; ?></a></td>
												<td>Vendor Name</td>
												<?php
													$sqlstep1 = "SELECT COUNT(*) AS total FROM products WHERE v_id = '$v_id'";
													$rowNumstep1 = mysqli_query($conn, $sqlstep1);
													$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
												?>
                                                <td><a  class="hrefbox"><?php echo  $countstep1["total"]; ?></a></td>
												<?php
													$sqlstep2 = "SELECT COUNT(DISTINCT o_id) AS total FROM orders WHERE v_id = '$v_id' AND status = 'Delivered'";
													$rowNumstep2 = mysqli_query($conn, $sqlstep2);
													$countstep2 = mysqli_fetch_assoc($rowNumstep2);								
												?>
												<td><a  class="hrefbox"><?php echo  $countstep2["total"]; ?></a></td>
                                            <!--<td>$30,566</td>-->
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