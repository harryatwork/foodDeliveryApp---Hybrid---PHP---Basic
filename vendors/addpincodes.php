<?php 
 include('../db.php'); 


$pincode = $_POST['pincode'];
$id = $_POST['v_id'];

$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO pincode (pincode, v_id)
VALUES ('$pincode', '$id')";

if ($conn->query($sql) === TRUE) {

header("Location: pincodes.php");
}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}
$conn->close();

?>