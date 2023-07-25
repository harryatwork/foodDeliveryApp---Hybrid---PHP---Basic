<?php include('db.php'); ?>

<?php


$u_id = $_GET["id1"];
$p_id = $_GET["id2"];
$v_id = $_GET["id3"];
$price = $_GET["id4"];



$date = date_default_timezone_set('Asia/Kolkata');
$date = date('M-d,Y H:i:s');
$date2 = date('M-d,Y');


$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO cart (u_id, p_id, v_id, price, date)
VALUES ('$u_id', '$p_id', '$v_id', '$price', '$date2')";

	
if ($conn->query($sql) === TRUE) {
 header("location:products.php?id=$v_id");
}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>















