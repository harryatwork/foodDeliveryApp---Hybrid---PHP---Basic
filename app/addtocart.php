<?php include('db.php'); ?>

<?php


$u_id = $_POST["uId"];
$p_id = $_POST["pId"];
$v_id = $_POST["vId"];
$price = $_POST["price"];



$date = date_default_timezone_set('Asia/Kolkata');
$date = date('M-d,Y H:i:s');
$date2 = date('Y-m-d');


$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO cart (u_id, p_id, v_id, price, date)
VALUES ('$u_id', '$p_id', '$v_id', '$price', '$date2')";

	
if ($conn->query($sql) === TRUE) {

}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>















