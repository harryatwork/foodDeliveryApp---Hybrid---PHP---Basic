<?php 
 include('../db.php'); 


$category = $_POST['category'];

$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO cat (name)
VALUES ('$category')";

if ($conn->query($sql) === TRUE) {

header("Location: category");
}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}
$conn->close();

?>