<?php 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include("../db.php");


$o_id = $_POST["o_id"];
$status = $_POST["status"];

$date = date_default_timezone_set('Asia/Kolkata');
$date = date('M-d,Y H:i:s');
$date2 = date('Y-m-d');

$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE orders SET status = '$status'
        WHERE o_id = '$o_id'";

        if ($conn->query($sql) === TRUE) {
            header("location:orderssub.php?id=".$status);   
        } else {
            header("location:orderssub.php?id=".$status);
         }