<?php include ('../db.php'); ?>
<?php


$comm = $_POST['comm'];


$id = $_POST['id'];




$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE vendors SET comm = '$comm'

WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
header("Location: vendordetail.php?id=$id");
}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>















