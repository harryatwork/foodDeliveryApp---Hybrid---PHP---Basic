<?php include('header.php'); ?>
<?php $o_id = $_GET["id"]; ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Order Details</h3>
                                </div>
                                <div class="card-content card-padding">
                                    <div class="m-b-20">
                                        <div>
                                            
										<?php 
												$sql2 = "SELECT * FROM orders WHERE id = '$o_id'";
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
													$pic = $row3["pic"];
										?>
										<?php 
												$sql4 = "SELECT * FROM users WHERE id = '$u_id' ";
												$result4 = $conn->query($sql4);
												if ($result4->num_rows > 0) {                               
												while($row4 = $result4->fetch_assoc()) {
													$uname = $row4["fname"];
													$ucity = $row4["city"];
													$umobile = $row4["mobile"];
													$uaddress = $row4["address"];
										?>
										<?php 
												$sql5 = "SELECT * FROM vendors WHERE id = '$v_id' ";
												$result5 = $conn->query($sql5);
												if ($result5->num_rows > 0) {                               
												while($row5 = $result5->fetch_assoc()) { 
													$business = $row5["business"];
										?>
											<div class="row">
                                                <div class="col-md-6">
                                                    <h4> Desi Desire Shop <br>
													<br>
													<img id="invoice-logo" src="../images/products/<?php echo $pic; ?>"  style="height:300px;" alt=""> </h4>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <h4>User Info</h4>
                                                        <span class="font-size-20"><?php echo $uname; ?></span> </p>
													  <address>
													  <?php echo $uaddress; ?> <br>
													  <abbr title="Phone">P:</abbr>&nbsp;&nbsp;<?php echo $umobile; ?> <br>
													  </address>
                                                    <span>Ordered Date: <?php echo $date; ?></span> <br>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table table-striped text-right">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Order ID</th>
                                                            <th>Description</th>
                                                            <th class="text-right">Quantity</th>
                                                            <th class="text-right">Unit Cost</th>
                                                            <th class="text-right">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center"><?php echo $o_id; ?></td>
                                                            <td class="text-left"><?php echo $pname; ?></td>
                                                            <td><?php echo $quantity; ?></td>
                                                            <td>$<?php echo $pprice; ?></td>
                                                            <td>$<?php echo ($quantity * $pprice); ?></td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
											<?php 
												$sql6 = "SELECT * FROM other WHERE id = '1' ";
												$result6 = $conn->query($sql6);
												if ($result6->num_rows > 0) {                               
												while($row6 = $result6->fetch_assoc()) { 
													$tax = $row6["tax"];
											?>
                                            <div class="text-right clearfix">
                                                <div class="pull-right">
                                                    <p> Amount: <strong><span>$<?php echo ($quantity * $pprice); ?></span></strong> </p>
                                                    <p> Tax: <strong><span>$<?php echo $tax; ?></span></strong> </p>
                                                    <p class="page-invoice-amount"> <strong>Grand Total: <span>$<?php echo (($quantity * $pprice) + $tax); ?></span></strong> </p>
                                                    <br>
                                                </div>
                                            </div>
											<?php } } else { } ?>
                                            <hr>
                                            <div class="text-right">
											<?php if($status == 'Cancelled'){ ?>
												<a type="submit" class="btn btn-primary"> <i class="icmn-checkmark margin-right-5"></i>Order Cancelled</a>
											<?php } else { ?>
												<a type="submit" href="updateorder?id=<?php echo $o_id; ?>&id2=Order Delivered" class="btn btn-primary"> <i class="icmn-checkmark margin-right-5"></i>Mark Order As Complete</a>
											<?php } ?>
                                                <button type="button" class="btn btn-default" onClick="javascript:window.print();"> <i class="icmn-printer margin-right-5"></i> Print </button>
                                            </div>
											<?php } } else { } ?>
											<?php } } else { } ?>
											<?php } } else { } ?>
											<?php } } else { } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
    <?php include('footer.php'); ?>