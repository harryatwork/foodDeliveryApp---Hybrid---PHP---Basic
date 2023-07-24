<?php include('header.php'); ?>
			
			
            <div class="content">
                <div class="container-fluid">
					
                    <div class="row">
                       <form id="RegisterValidation" action="addvendor" method="post">
					   <div class="col-md-12">
                            <div class="card">
                                
                                    <div class="card-content">
                                        <h4 class="card-title">Register Vendor</h4>
										<div class="form-group label-floating">
                                            <label class="control-label">
                                                Business Name
                                                <small>*</small>
                                            </label>
                                            <input class="form-control" name="business" type="text" required="true" />
                                        </div>
										<div class="form-group label-floating">
                                            <label class="control-label">
                                                Authorized Personal Name
                                                <small>*</small>
                                            </label>
                                            <input class="form-control" name="name" type="text" required="true" />
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                Email Address
                                                <small>*</small>
                                            </label>
                                            <input class="form-control" name="email" type="email" required="true" />
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">
                                                City
                                                <small>*</small>
                                            </label>
                                            <input class="form-control" name="city" id="registerPassword" type="text" required="true" />
                                        </div>
										<input type="hidden" name="password" value="meeshorep" />
                                        <div class="category form-category">
                                            <small>*</small> Required fields</div>
                                    </div>
                                
                            </div>
                        </div>
						<button  class="btn btn-success" type="submit" style="width:100%;">Register Vendor</button>
						</form>
                    </div>

                    
					
					

                </div>
            </div>
        
<?php include('footer.php'); ?>