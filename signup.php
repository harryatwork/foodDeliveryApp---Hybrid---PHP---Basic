


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
        height: 630px;
        background-size:100%;
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
    <div class=""style="width:auto">
      <div class="head p-3">
        <ul style="list-style-type:none; text-align:right;">
          <li>
            <i class="fas fa-unlock-alt" style="color: white">
              <a
                href="signup.php"
                style="text-decoration: none;font-family:verdana; font-size:normal; color: whitesmoke; border-right: 2px solid whitesmoke; padding: 10px;"
                >Become A Vendor
              </a>
            </i>
            <a
              class="btn btn-outline-primary  btn-sm"
              style="border-radius:30px; border-color:white; width:100px; color: whitesmoke"
              href="login.php"
              ><strong>Login</strong></a
            >
          </li>
        </ul>
		
        <div
          class="box d-flex justify-content-center"
          style="border: 2px solid black; width:460px; height: 500px; background-color:lightblue; border-radius: 20px;margin-left:400px;"
        >
          <div class="col-md-8 py-3">
            <center>
              <img src="images/mainpage/logo.png" alt="" width="300px;" />
              <h5>Sign Up to Place an Order</h5>
              <p style="font-size:13px;">Groceries Delivered In 1 Hour! </p>
            </center>
        <form action="signupinsert.php" method="post">
            <input
              type="text"
              class="form-control mb-2"
              style="border-radius: 20px"
              placeholder="Enter First Name" name="fname"
            />
			<input
              type="text"
              class="form-control mb-2"
              style="border-radius: 20px"
              placeholder="Enter Last Name" name="lname"
            />
			<input
              type="email"
              class="form-control mb-2"
              style="border-radius: 20px"
              placeholder="Enter Email ID" name="email"
            />
            <input
              type="number"
              class="form-control mb-2"
              style="border-radius: 20px"
              placeholder="Enter Mobile Number" name="mobile"
            />
			<input
              type="password"
              class="form-control mb-2"
              style="border-radius: 20px"
              placeholder="Enter Password" name="password"
            />
            <button
              type="submit" name="submit"
              class="btn btn-primary btn-block"
              style="border-radius: 20px"
              >Sign Un</button
            >
            <p class="text-muted text-center mt-2" >
              Already Hold an Account..?
              <a href="login.php">Sign In</a>
            </p>
        </form>
          </div>
        </div>
      </div>
    </div>

  </div>

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
