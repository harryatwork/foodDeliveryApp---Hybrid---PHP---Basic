<?php include('header_stores.php'); ?>


<style>
.list-group {
  border-color: #D0D5DC !important;
}
.list-group .list-group-item {
  border-color: #D0D5DC !important;
}
h1, h2, h3, h4, h5, h6 {
  font-weight: 500 !important;
}
a.account-card {
  text-decoration: none;
  color: unset;
}
a.account-card i.fa {
  font-size: 42px;
  width: 45px;
}
a.account-card .card {
  background: #F9FAFB;
  border: 1px solid #D0D5DC;
}
a.account-card .card:hover {
  background: #FFFFFF;
}
a.account-card .card:active {
  background: #F0F2F5;
}
.bg-yellow {
  background: #F5D847;
  color: #222C3A;
}
.list-group-item-action {
  background: #F9FAFB;
}
.list-group-item-action .fa {
  width: 22px;
}
.list-group-item-action .fa.fa-angle-right {
  font-size: 20px;
  position: absolute;
  right: 5px;
  top: 14px;
}
.coupon {
  background: #F9FAFB;
  border: 2px dashed #D0D5DC !important;
}
.reward-status-box {
  position: relative;
  width: 100%;
  color: #FFFFFF;
  background: #1b8cb2;
  border: 2px solid #38b7e1;
  border-radius: 5px;
}
.reward-status-box .reward-status {
  width: 60%;
  background: #38b7e1;
  padding: 15px;
}
.reward-status-box .current-status {
  position: absolute;
  right: 15px;
  top: 15px;
  color: #FFFFFF;
}
.reward-status-box .current-status-2 {
  position: absolute;
  right: 15px;
  top: 41px;
  color: #FFFFFF;
}
.text-orange {
  color: #EC9532 !important;
}
.text-carbon {
  color: #222C3A !important;
}
.text-pebble {
  color: #79879A !important;
}
.text-gray {
  color: #A2ABB9 !important;
}
.text-cloud {
  color: #D0D5DC !important;
}
.text-blue {
  color: #49AED0 !important;
}
.text-gray {
  color: #A2ABB9 !important;
}
.text-pale-sky {
  color: #A2ABB9 !important;
}
.bg-black {
  background: #111822 !important;
}
.bg-snow {
  background: #F9FAFB !important;
}
.bg-fog {
  background: #F0F2F5 !important;
}
.bb1-cloud {
  border-bottom: 1px solid #D0D5DC;
}
.fs-14 {
  font-size: 14px !important;
}
.fs-22 {
  font-size: 22px !important;
}
.tanga-header .navbar-brand {
  margin-bottom: 5px;
}
.tanga-header .nav-link {
  color: #A2ABB9;
}
.tanga-header .nav-link:hover {
  color: #FFFFFF;
}
.tanga-header .nav-link:active {
  color: #A2ABB9;
}
.tanga-navbar {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  -ms-overflow-style: -ms-autohiding-scrollbar;
}
.tanga-navbar:-webkit-scrollbar {
  display: none;
}
.tanga-navbar .nav-link {
  white-space: nowrap;
  color: #79879A;
}
.tanga-navbar .nav-link:hover {
  color: #354050;
}
.tanga-navbar .nav-link:active {
  color: #79879A;
}
.btn-primary {
  background: #C62931;
  border-color: #C62931;
  cursor: pointer;
}
.btn-primary:hover {
  background: #d94950;
  border-color: #d94950;
}
.btn-secondary {
  background: #FFFFFF !important;
  color: #354050 !important;
  border-color: #D0D5DC !important;
  cursor: pointer;
}
.btn-secondary:hover {
  color: #354050 !important;
  background: #F9FAFB !important;
}
.btn-secondary:active {
  color: #79879A !important;
  background: #F0F2F5 !important;
}
.btn-secondary:focus {
  color: #79879A !important;
  background: #F0F2F5 !important;
  outline: 0 !important;
}
.mobile-nav {
  position: fixed;
  bottom: 0;
  z-index: 50;
  display: block;
  width: 100%;
  background: #111822;
}
.mobile-nav a {
  text-decoration: none !important;
  cursor: pointer;
  color: #A2ABB9;
  font-size: 12px;
  float: left;
  width: 20%;
  display: inline-block;
  text-align: center;
  margin: 0 !important;
  padding: 8px 0px 5px 0px;
}
.mobile-nav a.active {
  background: #222C3A;
  color: #FFFFFF;
}
.mobile-nav a i {
  font-size: 23px;
  display: block;
  margin: 0 auto;
  margin-bottom: 2px;
}
.fs-18 {
  font-size: 18px !important;
}
.fs-22 {
  font-size: 22px !important;
}
.bg-snow {
  background: #F9FAFB !important;
}
.card {
  border-color: #D0D5DC !important;
}
.text-pebble {
  color: #79879A !important;
}
.text-charcoal {
  color: #354050 !important;
}
.bottom-drawer {
  position: fixed;
  bottom: 56px;
  width: 100%;
  border-top: 1px solid #D0D5DC;
}
.bg-white {
  background: #FFFFFF !important;
}
.list-group {
  border-color: #D0D5DC !important;
}
.list-group-item {
  border-color: #D0D5DC !important;
}
.text-red {
  color: #C62931 !important;
}
.text-green {
  color: #00A362 !important;
}
.text-link-blue {
  color: #3373cc !important;
}
.form-control {
  background: #F9FAFB;
  border-color: #D0D5DC !important;
}
.bd-2-cloud {
  border: 2px dashed #D0D5DC;
}
.b-1-green {
  border: 2px solid #00A362 !important;
}
.br-8 {
  border-radius: 5px;
}
.address-radio .address-label {
  padding: 1rem;
  margin-bottom: 0 !important;
}
.address-radio [type="radio"]:checked, .address-radio [type="radio"]:not(:checked) {
  position: absolute;
  opacity: 0;
}
.address-radio [type="radio"]:checked + label, .address-radio [type="radio"]:not(:checked) + label {
  position: relative;
  padding-left: 50px;
  width: 100%;
  cursor: pointer;
  line-height: 20px;
  display: inline-block;
  color: #354050;
}
.address-radio [type="radio"]:checked + label:before, .address-radio [type="radio"]:not(:checked) + label:before {
  content: '';
  position: absolute;
  left: 1rem;
  top: 1rem;
  width: 20px;
  height: 20px;
  border: 2px solid #D0D5DC;
  border-radius: 50%;
  background: #fff;
}
.address-radio [type="radio"]:checked + label:after, .address-radio [type="radio"]:not(:checked) + label:after {
  content: '';
  width: 12px;
  height: 12px;
  background: #00A362;
  position: absolute;
  top: 20px;
  left: 20px;
  border-radius: 50%;
  transition: all 0.2s ease;
}
.address-radio [type="radio"]:not(:checked) + label:after {
  opacity: 0;
  transform: scale(0);
}
.address-radio [type="radio"]:checked + label:after {
  opacity: 1;
  transform: scale(1);
}
.address-radio [type="radio"]:not(:checked) ~ label p {
  display: none;
}
.address-radio [type="radio"]:checked ~ label p {
  display: unset;
}

.row {
    margin-left:0px !important;
    margin-right:0px !important;
}

</style>


<?php 
    if(!isset($_SESSION["email"])) {
        header("location:index.php");
    }
?>


                <?php if(isset($_GET["added"])) { ?>

                <div style="display: flex;
                            align-items: center;
                            padding: 4% 0;
                            gap: 4%;
                            justify-content: center;">
                    <img src="../images/mainpage/orderPlaced.gif" alt=""
                        style="width: 50px;
                                height: 50px;"
                    />
                    <h5 style="font-size: 20px;
                                font-weight: 800 !important;
                                font-style: italic;">Order Placed Succesfully</h5>
                </div>

                <?php } ?>



                <?php 
                    $email = $_SESSION['email'];
                    $sql = "SELECT * FROM users WHERE email = '$email' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {   
                    while($row = $result->fetch_assoc()) {   
                        $u_id = $row["id"];
                        $userlocation = $row["location"];
                        $userflat = $row["flat"];
                        $userstreet = $row["street"];
                        $userarea = $row["area"];
                        $userpincode = $row["pincode"];
                    } } else { } 
                ?>    
                

                <div class="container mt-3 mt-md-5">
                    <h5 class="text-charcoal hidden-md-up" style="padding: 4%;">Your Orders</h5>
                    <div class="row">

                    <?php 
                        $sql2 = "SELECT DISTINCT(o_id) FROM orders WHERE u_id = '$u_id' ORDER BY o_id DESC";
                        $result2 = $conn->query($sql2);
                        if ($result2->num_rows > 0) {   
                        while($row2 = $result2->fetch_assoc()) {   
                            $o_id = $row2["o_id"];

                            $total = 0;
                            $subTotal = 0;
                            $sql55 = "SELECT * FROM orders WHERE o_id = '$o_id'";
                            $result55 = $conn->query($sql55);
                            if ($result55->num_rows > 0) {                               
                            while($row55 = $result55->fetch_assoc()) { 
                                $price = $row55["price"];
                                $quantity = $row55["quantity"];
                                $date = $row55["date"];

                                $subTotal = $price * $quantity;
                                $total = $total + $subTotal;
                            
                            } } else { } 
                    ?>

                        <div class="col-12">
                            <div class="list-group mb-5">
                                <div class="list-group-item p-3 bg-snow" style="position: relative;">
                                <div class=" w-100 no-gutters"
                                    style="display: grid;
                                            grid-template-columns: 1fr 1fr;
                                            gap: 8%;"
                                >
                                    <div class="col-6 col-md">
                                        <h6 class="text-charcoal mb-0 w-100">Order No</h6>
                                        <a href="" class="text-pebble mb-0 w-100 mb-2 mb-md-0">#<?= $o_id; ?></a>
                                    </div>
                                    <div class="col-6 col-md">
                                        <h6 class="text-charcoal mb-0 w-100">Date</h6>
                                        <p class="text-pebble mb-0 w-100 mb-2 mb-md-0"><?= $date; ?></p>  
                                    </div>
                                    <div class="col-6 col-md"> 
                                        <h6 class="text-charcoal mb-0 w-100">Total</h6>
                                        <p class="text-pebble mb-0 w-100 mb-2 mb-md-0">₹ <?= $total; ?></p> 
                                    </div>
                                    <div class="col-6 col-md"> 
                                        <h6 class="text-charcoal mb-0 w-100">Shipped To</h6>
                                        <p class="text-pebble mb-0 w-100 mb-2 mb-md-0"><?= $userlocation; ?></p> 
                                    </div>
                                </div>
                                
                                </div>
                                <div class="list-group-item p-3 bg-white">

                                    <div class="row no-gutters">
                                        <div class="col-12 col-md-9 pr-0 pr-md-3">
                                            <div class="alert p-2 alert-success w-100 mb-0">
                                                <h6 class="text-green mb-0"><b>Delivering To</b></h6>
                                                <p class="text-green hidden-sm-down mb-0"><?= $userflat; ?>, <?= $userstreet; ?>, <?= $userarea; ?>, <?= $userpincode; ?></p>
                                            </div>
                                        </div>

                                        <?php
                                            $sql55s = "SELECT * FROM orders WHERE o_id = '$o_id'";
                                            $result55s = $conn->query($sql55s);
                                            if ($result55s->num_rows > 0) {                               
                                            while($row55s = $result55s->fetch_assoc()) { 
                                                $p_id = $row55s["p_id"];

                                                $sql3 = "SELECT * FROM products WHERE id = '$p_id' ";
                                                $result3 = $conn->query($sql3);
                                                if ($result3->num_rows > 0) {   
                                                while($row3 = $result3->fetch_assoc()) {   
                                                    $p_id = $row3["id"];
                                                    $name = $row3["name"];
                                        ?>

                                        <div class="row no-gutters mt-3" style="display:flex;padding: 2%;">
                                            <div class="col-3 col-md-1">
                                                <img class="img-fluid pr-3" src="../images/products/<?= $row3["image"]; ?>" alt="" style="height:75px;width:100px;border-radius:6px;">
                                            </div>
                                            <div class="col-9 col-md-8 pr-0 pr-md-3">
                                                <h6 class="text-charcoal mb-2 mb-md-1">
                                                <a href="" class="text-charcoal"><?= $name; ?></a>
                                                </h6>
                                                <ul class="list-unstyled text-pebble mb-2 small">
                                                <li class="">
                                                    <b>Unit:</b> <?= $row3["quantity"]; ?> (gms/no)
                                                </li>
                                                <li class="">
                                                    <b>Quantity:</b> <?= $row55s["quantity"]; ?>
                                                </li>
                                                </ul>
                                                <h6 class="text-charcoal text-left mb-0 mb-md-2"><b>₹ <?= ($row55s["quantity"])*($row55s["price"]); ?></b></h6>
                                            </div>
                                        </div>

                                        <?php } } else { }  } } else { } ?>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <?php } } else {  } ?>

                        
                    </div>
                </div>

               

    <?php include("footer.php"); ?>