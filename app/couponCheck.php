<?php include('db.php'); 

$couponCode = $_POST["couponCode"];

$date = date_default_timezone_set('Asia/Kolkata');
$date = date('M-d,Y H:i:s');
$date2 = date('Y-m-d');


$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

	$sql55 = "SELECT * FROM coupons WHERE code = '$couponCode' AND status = 'Active'";
	$result55 = $conn->query($sql55);
	if ($result55->num_rows > 0) {                               
	while($row55 = $result55->fetch_assoc()) { 

        echo $row55["amount"];

	} } else {
        echo 'NA';
	}

$conn->close();
?>















