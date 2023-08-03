<?php include('header_stores.php'); ?>


   <?php 
        if(!isset($_SESSION["email"])) {
            header("location:index.php");
        }
   ?>
    
    <?php $v_id = 1; ?>
  
        <div class="content-wrapper">
            <div class="">
                <div class="container">
                    <div class="restaurant-banner row">
                        
                    <?php 
                        $email = $_SESSION['email'];
                        $sql = "SELECT * FROM users WHERE email = '$email' ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {   
                        while($row = $result->fetch_assoc()) {   
                            $u_id = $row["id"];
                            $flat = $row["flat"];
                            $location = $row["location"];
                            $street = $row["street"];
                            $area = $row["area"];
                            $pincode = $row["pincode"];
                    ?>
                        
                        <div class="res-banner-center col-md-7" style="background-image: url(../images/banners/vg1.jpg);background-size: cover;display: grid;justify-content: center;padding: 2%;">
                            <h4 class="res-banner-tit" style="color:black;background: white;border-radius: 4px;padding: 4%;width: fit-content;height: fit-content;">CHECKOUT</h4>
                        </div>
                        <div class="res-banner-right col-md-2"></div>
                    </div>
                </div>
            </div>

			
            <div class="food-section-outer">
                <div class="container-fluid">
                    <div class="food-section row" id="filter-menu">


                        <div class="_3tDvm ">
                            <div class="v6luz"></div>
                            <div class="_2QhOV _3glSS">
                                <div class="_3R9IF">
                                    <div class="_2gu8R">
                                        <h4 style="padding: 3%;
                                                    font-size: 16px;
                                                    width: 100%;
                                                    text-align: center;">
                                                    Confirm Address
                                        </h4>
                                    </div>
                                    <div class="_1stFr">
                                        <div>
                                            <div>
                                                <div>
                                                    <div class="_3xMk0">
                                                        <div class="g28rk">
                                                            <div class="_2XWVq" >
                                                                <form action="checkoutPre.php" method="POST" style="display: grid;
                                                                                        width: 100%;
                                                                                        gap: 2%;">
                                                                    <div class="_3h4gz">
                                                                        <input type="text"  class="form-control" value="<?php echo $location; ?>" placeholder="Location" name="location" style="width:100%;border-radius:6px;" />
                                                                    </div>
                                                                    <div class="_3h4gz">
                                                                        <input type="text"  class="form-control" value="<?php echo $flat; ?>" placeholder="Flat/Door No." name="flat" style="width:100%;border-radius:6px;" />
                                                                    </div>
                                                                    <div class="_3h4gz">
                                                                        <input type="text"  class="form-control" value="<?php echo $street; ?>" placeholder="Street Name" name="street" style="width:100%;border-radius:6px;" />
                                                                    </div>
                                                                    <div class="_3h4gz">
                                                                        <input type="text"  class="form-control" value="<?php echo $area; ?>" placeholder="Area Name" name="area" style="width:100%;border-radius:6px;" />
                                                                    </div>
                                                                    <div class="_3h4gz">
                                                                        <input type="number"  class="form-control" value="<?php echo $pincode; ?>" placeholder="Pincode" name="pincode" style="width:100%;border-radius:6px;" />
                                                                    </div>
                                                                    <input type="hidden" name="id" value="<?= $u_id; ?>" />
                                                                    <br/><br/>
                                                                    <div style="margin: auto;width: 100%;text-align: center;">
                                                                        <button type="submit" name="submit" style="background-color: green;
                                                                                                color: white;
                                                                                                padding: 10px 100px;
                                                                                                border-radius: 6px;
                                                                                                font-size: 16px;
                                                                                                height: fit-content;
                                                                                                cursor:pointer;" class=" add-btn">CONFIRM</button>
                                                                    </div>
                                                                </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="_1a4Mf"></div>
                        </div>

                    </div>

                </div>

            </div>
        
        </div>

<?php 
    }
        } else { }
 ?>
    
    <div class="aside-backdrop"></div>

    <?php include("footer.php"); ?>
    

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).on("click",".removeFromCartBtn",function() {
    var cId = $(this).attr("c-id");
    var cardIndiVal = parseInt($(this).attr("cardIndi-val"));
    var cartVal = parseInt($(".cartValue").text());
    $.post('removecart.php',
    {
        cId : cId
    },(result)=>{
        $(".cardIndi[c-id='"+cId+"']").remove();
        $(".cartValue").text(cartVal - cardIndiVal);
    });
});
</script>

</body>

</html>
