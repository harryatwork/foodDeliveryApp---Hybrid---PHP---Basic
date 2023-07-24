<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                    
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-rose">
                                      
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Orders</strong></p>
									<?php
										$sqlstep2 = "SELECT COUNT(*) AS total FROM orders WHERE status = 'confirmed'";
										$rowNumstep2 = mysqli_query($conn, $sqlstep2);
										$countstep2 = mysqli_fetch_assoc($rowNumstep2);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep2["total"]; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info">info</i><a href="orders">Vendor wise Orders</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Revenue</strong></p>
                                    <h3 class="card-title">Rs.0</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="material-icons text-info">info</i><a href="orders">Vendor wise Revenue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                       
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Users</strong></p>
									<?php
										$sqlstep3 = "SELECT COUNT(*) AS total FROM users";
										$rowNumstep3 = mysqli_query($conn, $sqlstep3);
										$countstep3 = mysqli_fetch_assoc($rowNumstep3);								
									?>
                                    <h3 class="card-title"><?php echo  $countstep3["total"]; ?></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i><a href="users">User Wise Reports</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Recent Orders Status</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <th>Order ID</th>
                                            <th>Product</th>
                                            <th>Category</th>
                                            <th>Vendor</th>
											<th>User</th>
											<th>Location</th>
											<th>Price</th>
											<th>Ordered at</th>
											<th>Status</th>
                                        </thead>
                                        <tbody>
										<?php 
												$sql2 = "SELECT * FROM orders LIMIT 10";
												$result2 = $conn->query($sql2);
												if ($result2->num_rows > 0) {                               
												while($row2 = $result2->fetch_assoc()) {   
													$o_id = $row2["id"];
													$p_id = $row2["p_id"];
													$u_id = $row2["u_id"];
													$v_id = $row2["u_id"];
													$quantity = $row2["quantity"];
													$delivery = $row2["delivery"];
													$status = $row2["status"];
													$date = $row2["date"];
										?>
										<?php 
												$sql3 = "SELECT * FROM products WHERE id = '$p_id' ";
												$result3 = $conn->query($sql3);
												if ($result3->num_rows > 0) {                               
												while($row3 = $result3->fetch_assoc()) { 
													$pname = $row3["name"];
													$pcategory = $row3["category"];
													$pprice = $row3["price"];
										?>
										<?php 
												$sql4 = "SELECT * FROM users WHERE id = '$u_id' ";
												$result4 = $conn->query($sql4);
												if ($result4->num_rows > 0) {                               
												while($row4 = $result4->fetch_assoc()) {
													$uname = $row4["fname"];
													$ucity = $row4["city"];
										?>
										<?php 
												$sql5 = "SELECT * FROM vendors WHERE id = '$v_id' ";
												$result5 = $conn->query($sql5);
												if ($result5->num_rows > 0) {                               
												while($row5 = $result5->fetch_assoc()) { 
													$business = $row5["business"];
										?>
                                            <tr>
                                                <td><?php echo $o_id; ?></td>
												<td><?php echo $pname; ?></td>
												<td><?php echo $pcategory; ?></td>
												<td><?php echo $business; ?></td>
                                                <td><?php echo $uname; ?></td>
												<td><?php echo $ucity; ?></td>
                                                <td>$ <?php echo ($quantity * $pprice); ?></td>
                                                <td><?php echo $date; ?></td>
											<?php if($status == 'Confirmed'){ 
														if($delivery == 'Order Received'){ ?>
												<td><strong><a href="orderdetail?id=<?php echo $o_id; ?>" class="hrefbox" style="color:lightblue;">Order Received</a></strong></td>
											<?php	} elseif ($delivery == 'Order Dispatched'){?>
												<td ><strong><a href="orderdetail?id=<?php echo $o_id; ?>" class="hrefbox" style="color:orange;">Order Dispatched</a></strong></td>
											<?php   } elseif ($delivery == 'Order In Transit'){?>
												<td ><strong><a href="orderdetail?id=<?php echo $o_id; ?>" class="hrefbox" style="color:blue;">Order In Transit</a></strong></td>
											<?php   }elseif  ($delivery == 'Order Delivered'){?>
												<td ><strong><a href="orderdetail?id=<?php echo $o_id; ?>" class="hrefbox" style="color:green;">Order Delivered</a></strong></td>
											<?php   }elseif  ($delivery == 'Pending'){?>
												<td ><strong><a href="orderdetail?id=<?php echo $o_id; ?>" class="hrefbox" style="color:gray;">Pending</a></strong></td>
											<?php   }else{ } ?>
											<?php } elseif($status == 'Cancelled'){	?>
												<td><strong><a href="orderdetail?id=<?php echo $o_id; ?>" class="hrefbox" style="color:red;">Order Cancelled</a></strong></td>
											<?php } else { } ?>
                                            </tr>
										<?php } } else { echo '';  } ?>
										<?php } } else { echo '';  } ?>
										<?php } } else { echo '';  } ?>
										<?php } } else { echo 'No Orders So Far';  } ?>
										
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>