<?php include('db.php'); ?>
<?php




$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$id = $_GET["id"];
$v_id = $_GET["id2"];


$sql4 = "DELETE FROM cart WHERE id = '$id' ";

if ($conn->query($sql4) === TRUE) {
 header("location:products.php?id=$v_id");
}
else {
	echo "ERROR" . $sql4 . "<br>" . $conn->error;
}

$conn->close();
?>















