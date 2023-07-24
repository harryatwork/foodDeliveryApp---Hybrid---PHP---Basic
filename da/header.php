<?php include('../db.php'); ?>
<?php 
	//15 2 2015
	session_start();
if(!isset($_SESSION["login"]))
        header("location:index.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.urbanui.com/" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Local Cart</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/turbo.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="assets/vendors/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

	
	<style>
		.hrefbox {
			border: 1.3px solid lightblue;
			border-radius: 7px;
			padding-left:10px;
			padding-right:10px;
			padding-top:3px;
			padding-bottom:3px;
		}
	</style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo">
                <a href="dashboard" class="simple-text">
                    <img class="img-responsive" src="../images/mainpage/logo.png" title="Local Cart" style="width:200px;" alt="Local Cart" />
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="#" class="simple-text">
                    DD
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="">
                        <a href="dashboard.php" style="color:white;">
                            <i class="material-icons" style="color:white;">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

				<!--<li class="">
                        <a href="views.php" style="color:white;">
                            <i class="material-icons" style="color:white;">dashboard</i>
                            <p>Store Impressions</p>
                        </a>
                    </li>-->
					
                    
                </ul>

            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default navbar-absolute" data-topbar-color="blue">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
							<i class="material-icons visible-on-sidebar-regular f-26">keyboard_arrow_left</i>
                            <i class="material-icons visible-on-sidebar-mini f-26">keyboard_arrow_right</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                
                            <li>
                                <a href="logout.php" class="dropdown-toggle">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>