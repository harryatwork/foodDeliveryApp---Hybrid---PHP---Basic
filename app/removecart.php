<?php include('db.php'); ?>
<?php

$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$cId = $_POST["cId"];
// $v_id = $_GET["id2"];


$sql4 = "DELETE FROM cart WHERE id = '$cId' ";

if ($conn->query($sql4) === TRUE) {
}
else {
	echo "ERROR" . $sql4 . "<br>" . $conn->error;
}

$conn->close();
?>















