

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
            <center>
              <h5>Sign Up</h5>
              <?php if(isset($_GET["error"])) {
                $error = $_GET["error"]; 
                      if($error == 'exists'){ ?>
                  <p style="font-size:14px;color:#a90000;"><strong>Account already exists with the Email ID. <br> Please Login</strong></p>
              <?php } else { ?>
                  <p style="font-size:13px;">Groceries Delivered In 1 Hour! </p>
              <?php } } ?>
              <img src="../images/mainpage/logo.png" alt="" width="300px;" />
              <h5>Groceries Delivered In 1 Hour!</h5>
            </center>

            <form action="signupinsert.php" method="post">
                <input
                      type="text"
                      class="form-control mb-2"
                      style="border-radius: 10px"
                      placeholder="Enter First Name" name="fname"
                    />
              <input
                      type="text"
                      class="form-control mb-2"
                      style="border-radius: 10px"
                      placeholder="Enter Last Name" name="lname"
                    />
              <input
                      type="email"
                      class="form-control mb-2"
                      style="border-radius: 10px"
                      placeholder="Enter Email ID" name="email"
                    />
                    <input
                      type="number"
                      class="form-control mb-2"
                      style="border-radius: 10px"
                      placeholder="Enter Mobile Number" name="mobile"
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
                      >Sign Up</button
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
