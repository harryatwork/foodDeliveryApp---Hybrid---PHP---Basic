<?php include ('../db.php'); ?>
<?php

$id = $_GET['id'];
$status = 'Active';



$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE vendors SET status = '$status'
WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
header('Location: vendorregistration');
}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>















