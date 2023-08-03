<?php session_start(); ?>
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
      <div class="head p-3" style="display: grid;align-items: center;padding: 0 !important;height:100% !important;">
        <div
          class="box d-flex justify-content-center mobile"
          style="border: 2px solid black;  height: fit-content; background-color:lightblue; border-radius: 20px;margin: auto;"
        >
          <div class="col-md-8 py-3">
            <form action="products.php" method="post">
            <center>
              <img src="../images/mainpage/logo.png" alt="" width="300px;" />
              <h5>Groceries Delivered In 1 Hour!</h5>
            </center>

            <select name="location" class="form-control mb-2">
              <option value="Madhapur">Madhapur</option>
              <option value="Kukatpally">Kukatpally</option>
              <option value="Gachibowli">Gachibowli</option>
            </select>
            
            <?php if(isset($_SESSION['email'])) { ?>
              <button
                type="submit"
                class="btn btn-primary btn-block"
                style="border-radius: 10px; background-color:#0C35DE;"
              >Confirm Location</button>
            <?php } else { ?> 
              <a
                href="login.php"
                class="btn btn-primary btn-block"
                style="border-radius: 10px; background-color:#0C35DE;"
              >Confirm Location</a>
            <?php } ?>

            
            </form>
            <?php if(isset($_SESSION['email'])) { } else { ?>
              <p class="text-muted text-center mt-2">
                Already have an account?
                <a href="login.php">Login</a>
              </p>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
  </body>
</html>
