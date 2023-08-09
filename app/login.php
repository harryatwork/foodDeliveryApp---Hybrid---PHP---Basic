<?php

if(isset($_POST['submit'])){


include ('db.php'); 
	//15 2 2015
	session_start();
	$email = $_REQUEST["email"];
	$password = md5($_REQUEST["password"]);

    
    $s = "select * from users where email='".$email."' and password = '".$password."'";
    
    $result = mysqli_query($conn,$s);
    
    $count = mysqli_num_rows($result);
    
    if($count>0)
    {
		$_SESSION["email"] = $email; 
		$_SESSION["password"] = $password;
        $_SESSION["login"]="1";
        header("location:index.php");
    }
    else
    {
	       header("location:login.php?id=1");   
  }
  
  
}

?>



<style>
  @media only screen and (max-width: 350px) {
  /* For mobile phones: */
  .mobile {
    margin-left:-12px;
    width:250px;
    min-width: 100%;
  }
}
  @media only screen and (min-width: 350px and max-width: 768px) {
  /* For mobile phones: */
  .mobile {
    margin-left:-12px;
    width:auto;
    min-width: auto;
  }
}
@media only screen and (min-width: 768px) {
    .mobile {
        margin-left:30%;
        width:460px;
        min-width: auto;
    }
}
</style>

<?php include('header_index.php'); ?>
      <div class="head p-3" style="display: grid;align-items: center;padding: 0 !important;height:100% !important;grid-template-rows: 10% 1fr;">
      <a href="index.php" class="btn btn-primary btn-block" style="color: white;width: fit-content;padding: 1% 4%;margin: 4%;" >Back</a>
        <div
          class="box d-flex justify-content-center mobile"
          style="border: 2px solid black; background-color:lightblue; border-radius: 20px;margin: auto;"
        >
          <div class="col-md-8 py-3">
            <form action="login.php" method="post">
            <center>
              <h5>Sign In to Place an Order</h5>
              <?php if(isset($_GET["id"])) {
                $id = $_GET["id"]; 
                      if($id == 1){ ?>
                  <p style="font-size:14px;color:red;"><strong>Wrong Password Or Email ID. Try Again</strong></p>
              <?php } else { ?>
                  <p style="font-size:13px;">Groceries Delivered In 1 Hour! </p>
              <?php } } ?>
              <img src="../images/logo.png" alt="" width="300px;" />
              <h5>Groceries Delivered In 1 Hour!</h5>
            </center>

            <form action="login.php" method="post">
              <input
                    type="email"
                    class="form-control mb-2"
                    style="border-radius: 10px"
                    placeholder="Enter Email ID" name="email"
                  />
              <input
                    type="password"
                    class="form-control mb-2"
                    style="border-radius: 10px"
                    placeholder="Enter Password" name="password"
                  />
              <button
                    type="submit" name="submit"
                    class="btn btn-primary btn-block"
                    style="border-radius: 10px"
                    >Log In</button
                >
                  <p class="text-muted text-center mt-2" >
                    Don't Have An Account..?
                    <a href="signup.php">Sign Up</a>
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
