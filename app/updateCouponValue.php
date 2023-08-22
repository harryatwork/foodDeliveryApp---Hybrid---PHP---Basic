<?php 

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include("db.php");

$uId = $_POST['uId'];
$couponValue = $_POST['couponValue'];

$sql = "UPDATE cart SET couponValue = '$couponValue'
        WHERE u_id = '$uId'";

        if ($conn->query($sql) === TRUE) {

        } else { }