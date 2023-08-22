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
											<th>Location</th>
											<th>Order Value</th>
											<th>Ordered at</th>
											<th>Status</th>
                                        </thead>
                                        <tbody>
                            <?php 
								$email = $_SESSION['email'];
								$sqlnesu = "SELECT * FROM vendors WHERE email = '$email' ";
								$resultnesu = $conn->query($sqlnesu);
								if ($resultnesu->num_rows > 0) {   
								while($rownesu = $resultnesu->fetch_assoc()) {  
									$v_id = $rownesu["id"]; 
							?>



							<?php 
								$sqls5 = "SELECT DISTINCT(o_id) FROM orders WHERE status = '$getter' AND v_id = '$v_id'";	
								$results5 = $conn->query($sqls5);
								if ($results5->num_rows > 0) {                               
								while($rows5 = $results5->fetch_assoc()) { 
									$o_id = $rows5["o_id"];
							?>

								<tr>
									<td><?= $o_id; ?></td>
									<td>
										<?php
											$totalPrice = 0;
											$sql8s = "SELECT * FROM orders WHERE o_id = '$o_id' ";
											$result8s = $conn->query($sql8s);
											if ($result8s->num_rows > 0) {                               
											while($row8s = $result8s->fetch_assoc()) { 
												$p_id = $row8s["p_id"];
												$u_id = $row8s["u_id"];
												$orderDate = $row8s["date"];
												$totalPrice = $totalPrice + ($row8s["price"] * $row8s["quantity"]);

											$sql8 = "SELECT * FROM products WHERE id = '$p_id'";
											$result8 = $conn->query($sql8);
											if ($result8->num_rows > 0) {                               
											while($row8 = $result8->fetch_assoc()) { 
												$pname = $row8["name"];
										?>
											<a href="productdetail?id=<?= $p_id; ?>" class="hrefbox"><?php echo $pname; ?></a>
										<?php 
											} } else { } 
											} } else { }
										?>
									</td>
									<td>
										<?php
											$sql6 = "SELECT * FROM users WHERE id = '$u_id' ";
											$result6 = $conn->query($sql6);
											if ($result6->num_rows > 0) {                               
											while($row6 = $result6->fetch_assoc()) { 
												$uname = $row6["fname"];
												$flat = $row6["flat"];
												$area = $row6["area"];
												$street = $row6["street"];
												$pincode = $row6["pincode"];
												$location = $row6["location"];

												echo $uname;

											} } else { } 
										?>
									</td>
									<td><?= $flat.' '.$street.' '.$area.' '.$location.' '.$pincode; ?></td>
									<td>Rs. <?php echo $totalPrice; ?></td>
									<td><?php echo $orderDate; ?></td>
									<td>
										<form class="orderStatusChangeForm" action="orderStatusChange.php" method="post">
										<input type="hidden" name="o_id" value="<?= $o_id; ?>" />
										<select name="status" class="orderStatusChange">
											<option value="">Choose Status</option>
											<option value="Confirmed">Mark as Confirmed</option>
											<option value="Running">Mark as Running</option>
											<option value="Delivered">Mark as Delivered</option>
											<option value="Cancelled">Mark as Cancelled</option>
										</select>
										</form>
									</td>
								</tr>

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


<script>
$(document).on("change",".orderStatusChange",function(){
	console.log(1)
	$(".orderStatusChangeForm").submit()
});
</script>