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
            <form action="stores.php" method="post">
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
