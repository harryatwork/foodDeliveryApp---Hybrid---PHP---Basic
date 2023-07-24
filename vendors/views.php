<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">

                    <?php 
								$email = $_SESSION['email'];
								$sqlnesu = "SELECT * FROM users WHERE email = '$email' ";
								$resultnesu = $conn->query($sqlnesu);
								if ($resultnesu->num_rows > 0) {   
								while($rownesu = $resultnesu->fetch_assoc()) {  
									$v_id = $rownesu["id"]; 
							?>

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Product Impressions</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <th>Product Name</th>
                                            <th>Category</th>
											<th>No. Of Views</th>
                                        </thead>
                                        <tbody>
										<?php 
												$sql3 = "SELECT * FROM products WHERE v_id = '$v_id' ";
												$result3 = $conn->query($sql3);
												if ($result3->num_rows > 0) {                               
												while($row3 = $result3->fetch_assoc()) { 
													$name = $row3["name"];
													$category = $row3["category"];
													$views = $row3["views"];
										?>
                                            <tr>
                                                <td><?php echo $name; ?></td>
												<td><?php echo $category; ?></td>
												<td><?php echo $views; ?></td>
                                            </tr>
										<?php } } else { } ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<?php } } else { } ?>

                </div>
            </div>
        
<?php include('footer.php'); ?>