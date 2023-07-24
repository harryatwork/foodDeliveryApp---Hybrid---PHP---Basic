<?php include ('../db.php'); ?>
<?php

$id = $_GET['id'];
$dstatus = $_GET['id2'];
$daid = $_GET['id3'];







$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE orders SET dstatus = '$dstatus', daid = '$daid'

WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
header("Location: ordersub.php?id=$id");
}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>















