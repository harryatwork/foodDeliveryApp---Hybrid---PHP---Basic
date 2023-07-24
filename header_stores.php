<?php 
	session_start();
?>
<?php include ('db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Local Cart</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link href="assets/user/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="assets/user/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ionicons CSS -->
    <link href="assets/user/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Material Icons CSS -->
    <link href="assets/user/material-icons/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Slick CSS -->
    <link href="assets/user/css/slick.css" rel="stylesheet">
    <link href="assets/user/css/slick-theme.css" rel="stylesheet">
    <!-- Semantic CSS -->
    <link href="assets/user/css/semantic.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="assets/user/css/style.css" rel="stylesheet">
    <style>
        .pac-container {
            z-index: 9999999999999999999 !important;
        }
    </style>
    <style>
        .pac-container {
            z-index: 100000000 !important;
        }
    </style>
    <style type="text/css">
        .red {
            position: absolute;
            /*//text-indent: -9999px;*/
            top: -5px;
            left: -5px;
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            z-index: 3;
            opacity: 0.5;
            color: black;
            background-color: red 1px solid;
        }
        
        .text {
            position: absolute;
            top: 45%;
            left: 50%;
            font-size: 50px;
            color: white;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }
        
        .opentext {
            position: absolute;
            top: 55%;
            line-height: 35px;
            left: 50%;
            font-size: 14px;
            color: white;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <!-- Main Wrapper Starts -->
    <div class="main-wrapper pusher">
        <!-- Header Starts -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgation-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logoback" href="index.php">
                        <img src="images/mainpage/logo.png">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navgation-1">
                    <?php 
								$email = $_SESSION['email'];
                                $sql = "SELECT * FROM users WHERE email = '$email' ";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {   
                                while($row = $result->fetch_assoc()) {   
									$u_id = $row["id"];
						?>
						
						<ul class="nav navbar-nav navbar-right">
                            <li> <a href="orders.php" class="login-item signinform">My Orders</a></li>
                            <?php
									$sqlstep2ck = "SELECT COUNT(*) AS total FROM cart WHERE u_id = '$u_id'";
									$rowNumstep2ck = mysqli_query($conn, $sqlstep2ck);
									$countstep2ck = mysqli_fetch_assoc($rowNumstep2ck);								
								?>
                            <li class="dropdown"><a ><span class="cart-count"><?php echo  $countstep2ck["total"]; ?></span> Cart</a></li>
                        
                            <li><a href="logout.php" class="active signupform">Log Out</a></li>
                        </ul>
						
						<?php 
							  }
								 } else {
						?>
						
    					<ul class="nav navbar-nav navbar-right">
                            <li> <a href="login.php" class="login-item signinform">Login</a></li>
                            <li><a href="signup.php" class="active signupform">Register</a></li>
                        </ul>
						
						<?php } ?>
						
                    
                </div>
            </div>
        </nav>