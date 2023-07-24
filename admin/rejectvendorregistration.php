<?php include('../db.php'); ?>
<?php




$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["id"];


$sql4 = "DELETE FROM vendors WHERE id = '$id' ";

if ($conn->query($sql4) === TRUE) {
 header("location:vendorregistration.php");
}
else {
	echo "ERROR" . $sql4 . "<br>" . $conn->error;
}

$conn->close();
?>















