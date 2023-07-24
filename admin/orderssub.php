<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">

                    
				<?php $getter = $_GET["id"]; ?>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title"> <?php echo $getter; ?> Orders</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>User Name</th>
											<th>Vendor Name</th>
											<th>Location</th>
											<th>Order Value</th>
											<th>Ordered at</th>
											<th>Action</th>
                                        </thead>
                                        <tbody>
										<?php 
											if($getter == 'running'){
												$sql5 = "SELECT * FROM orders WHERE dstatus != 'Delivered'";
											}else {
												$sql5 = "SELECT * FROM orders WHERE dstatus = '$getter' ";
											}
												$result5 = $conn->query($sql5);
												if ($result5->num_rows > 0) {                               
												while($row5 = $result5->fetch_assoc()) { 
													$o_id = $row5["id"];
													$u_id = $row5["u_id"];
													$v_id = $row5["v_id"];
													$p_id = $row5["p_id"];
													$date = $row5["date"];
													$price = $row5["price"];
													
										?>
										<?php 
												$sql6 = "SELECT * FROM users WHERE id = '$u_id' ";
												$result6 = $conn->query($sql6);
												if ($result6->num_rows > 0) {                               
												while($row6 = $result6->fetch_assoc()) { 
													$uname = $row6["fname"];
													$location = $row6["location"];
										?>
										<?php 
												$sql7 = "SELECT * FROM vendors WHERE id = '$v_id' ";
												$result7 = $conn->query($sql7);
												if ($result7->num_rows > 0) {                               
												while($row7 = $result7->fetch_assoc()) { 
													$business = $row7["business"];
										?>
										<?php 
												$sql8 = "SELECT * FROM products WHERE id = '$p_id' ";
												$result8 = $conn->query($sql8);
												if ($result8->num_rows > 0) {                               
												while($row8 = $result8->fetch_assoc()) { 
													$pname = $row8["name"];
												
													
										?>
                                            <tr>
                                                <td><?php echo $row5["id"]; ?></td>
												<td><a href="productdetail?id=<?php echo $p_id; ?>" class="hrefbox"><?php echo $pname; ?></a></td>
												<td><a href="userdetail?id=<?php echo $u_id; ?>" class="hrefbox"><?php echo $uname; ?></a></td>
												<td><a href="vendordetail?id=<?php echo $v_id; ?>" class="hrefbox"><?php echo $business; ?></a></td>
												<td><?php echo $location; ?></td>
                                                <td>$<?php echo $price?></td>
                                                <td><?php echo $date; ?></td>
												<td><a href="orderdetail?id=<?php echo $o_id; ?>" class="hrefbox">view</a></td>
                                            </tr>
										<?php } } else { } ?>
										<?php } } else { } ?>
										<?php } } else { } ?>
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