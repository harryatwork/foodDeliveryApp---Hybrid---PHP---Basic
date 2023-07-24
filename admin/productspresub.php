<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">

                    <?php 
						$id = $_GET["id"]; 
						$tablum = $_GET["id2"]; 
						
						if($tablum == 'vendors'){
							$col = 'v_id';
						}elseif($tablum == 'cat'){
							$col = 'cat';
						}else{
							$col = 'status';
						}
					?>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Products</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <th>Product ID</th>
                                            <th>Name</th>
											<th>No. Of Orders</th>
											<th>Added at</th>
                                        </thead>
                                        <tbody>
										<?php 
												$sql5 = "SELECT * FROM products WHERE $col = '$id'";
												$result5 = $conn->query($sql5);
												if ($result5->num_rows > 0) {                               
												while($row5 = $result5->fetch_assoc()) { 
													$id = $row5["id"];
										?>
                                            <tr>
                                                <td><?php echo $row5["id"]; ?> </td>
												<td><a href="productdetail?id=<?php echo $row5["id"]; ?> " class="hrefbox"><?php echo $row5["name"]; ?> </a></td>
												<?php
													$sqlstep1 = "SELECT COUNT(*) AS total FROM orders WHERE p_id = '$id'";
													$rowNumstep1 = mysqli_query($conn, $sqlstep1);
													$countstep1 = mysqli_fetch_assoc($rowNumstep1);								
												?>
												<td><a href="ordersbyproduct?id=<?php echo $row5["id"]; ?> " class="hrefbox"><?php echo  $countstep1["total"]; ?></a></td>
                                                <td><?php echo $row5["date"]; ?> </td>
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