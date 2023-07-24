<?php include ('../db.php'); ?>
<?php


$value = $_POST['value'];


$id = $_POST['id'];




$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE others SET value = '$value'

WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
header('Location: others.php');
}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>















