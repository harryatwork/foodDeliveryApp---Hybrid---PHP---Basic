<?php 
	session_start();
?>
<?php include ('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Local Cart</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
      integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
      crossorigin="anonymous"
    />

    <style>
      body {
        background-image: url();
        background-repeat: none;
        background-position: fixed;
      }
      .head {
        background-image: url(images/mainpage/bg1.jpeg);
        height: 700px;
        background-size:100%;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .two {
        background-image: -webkit-linear-gradient(
          150deg,
          rgba(0, 0, 0, 0.1) 35%,
          white 35%
        );
        min-height: 300px;
      }
      .footer a {
        text-decoration: none;
        color: white;
        background-color: black;
    
      }
      .footer li{
        list-style: none;
		font-size:15px;
		
      }
      .carousel-caption h5 {
        margin-top: -180px !important;
        margin-left: -450px !important;
      }
      .carousel-indicators li {
        margin-top: -250px !important;
        text-align: left !important;
      }
      .carousel-indicators {
        margin-left: -580px !important;
      }
    </style>
  </head>
  <body>
    <div class=""style="width:auto; height:700px;">
      <div class="head p-3">
        <ul style="list-style-type:none; text-align:right;">
            <?php 
								$email = $_SESSION['email'];
                                $sql = "SELECT * FROM users WHERE email = '$email' ";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {   
                                while($row = $result->fetch_assoc()) {   
									$u_id = $row["id"];
						?>
          <li>
            <i class="fas fa-unlock-alt" style="color: white">
              <a
                href="orders.php"
                style="text-decoration: none;font-family:verdana; font-size:normal; color: whitesmoke; border-right: 2px solid whitesmoke; padding: 10px;"
                >My Orders
              </a>
            </i>
            <a
              class="btn btn-outline-primary  btn-sm"
              style="border-radius:30px; border-color:white; width:100px; color: whitesmoke"
              href="logout.php"
              ><strong>Log Out</strong></a
            >
          </li>
          
          <?php 
							  }
								 } else {
						?>
          
          <li>


            <i class="fas fa-unlock-alt" style="color: white">
              <a
                href="dasignup.php"
                style="text-decoration: none;font-family:verdana; font-size:normal; color: whitesmoke; border-right: 2px solid whitesmoke; padding: 10px;"
                >Become A Driver
              </a>
            </i>
            <i class="fas fa-unlock-alt" style="color: white">
              <a
                href="vendorsignup.php"
                style="text-decoration: none;font-family:verdana; font-size:normal; color: whitesmoke; border-right: 2px solid whitesmoke; padding: 10px;"
                >Become A Vendor
              </a>
            </i>

            
            <a
              class="btn btn-outline-primary  btn-sm"
              style="border-radius:30px; border-color:white; width:100px; color: whitesmoke"
              href="login.php"
              ><strong>User Login</strong></a
            >
          </li>
          
          <?php } ?>
        </ul>