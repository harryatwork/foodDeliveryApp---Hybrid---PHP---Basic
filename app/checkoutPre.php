<?php 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include("db.php");

if(isset($_POST['submit'])){

$flat = $_POST['flat'];
$location = $_POST['location'];
$street = $_POST['street'];
$area = $_POST['area'];
$pincode = $_POST['pincode'];

$u_id = $_POST['id'];

$date = date_default_timezone_set('Asia/Kolkata');
$date = date('M-d,Y H:i:s');
$date2 = date('Y-m-d');

$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE users SET flat = '$flat', location = '$location', street = '$street', area = '$area', pincode = '$pincode'
        WHERE id = '$u_id'";

        if ($conn->query($sql) === TRUE) {


            $sql5s5 = "SELECT * FROM orders ORDER BY id DESC LIMIT 1";
            $result5s5 = $conn->query($sql5s5);
            if ($result5s5->num_rows > 0) {                               
            while($row5s5 = $result5s5->fetch_assoc()) { 
                $o_id = $row5s5["o_id"];
                $o_id = $o_id + 1;
            } } else {
                $o_id = 1;
            }


            $sql55 = "SELECT * FROM cart WHERE u_id = '$u_id'";
            $result55 = $conn->query($sql55);
            if ($result55->num_rows > 0) {                               
            while($row55 = $result55->fetch_assoc()) { 
                $c_id = $row55["id"];
                $p_id = $row55["p_id"];
                $v_id = $row55["v_id"];
                $price = $row55["price"];
                $quantity = $row55["quantity"];


                $sql = "INSERT INTO orders (o_id, u_id, p_id, v_id, price, quantity, date)
                VALUES ('$o_id', '$u_id', '$p_id', '0', '$price', '$quantity', '$date2')";
                if ($conn->query($sql) === TRUE) {
                    


                    $sqld = "DELETE FROM cart WHERE id = '$c_id'";
                    if ($conn->query($sqld) === TRUE) { }
                    else {
                        echo "ERROR" . $sqld . "<br>" . $conn->error;
                    }


                }
                else {
                    echo "ERROR" . $sql . "<br>" . $conn->error;
                }


            } } else { }


            header("Location: orders.php?added");
        }
        else {
            echo "ERROR" . $sql . "<br>" . $conn->error;
        }
}

$conn->close();
?>