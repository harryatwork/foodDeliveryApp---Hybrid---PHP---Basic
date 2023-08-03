<?php include('db.php'); ?>

<?php


$u_id = $_POST["uId"];
$p_id = $_POST["pId"];
$v_id = $_POST["vId"];
$price = $_POST["price"];
$quantity = $_POST["quantity"];



$date = date_default_timezone_set('Asia/Kolkata');
$date = date('M-d,Y H:i:s');
$date2 = date('Y-m-d');


$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

if($quantity == 0) {

	$sqld = "DELETE FROM cart WHERE u_id = '$u_id' AND p_id = '$p_id'";
	if ($conn->query($sqld) === TRUE) { }
	else {
		echo "ERROR" . $sqld . "<br>" . $conn->error;
	}

} else {

	$sql55 = "SELECT * FROM cart WHERE u_id = '$u_id' AND p_id = '$p_id'";
	$result55 = $conn->query($sql55);
	if ($result55->num_rows > 0) {                               
	while($row55 = $result55->fetch_assoc()) { 

		$sqlu = "UPDATE cart SET quantity = '$quantity' WHERE u_id = '$u_id' AND p_id = '$p_id'";
		if ($conn->query($sqlu) === TRUE) { }
		else {
			echo "ERROR" . $sqlu . "<br>" . $conn->error;
		}

	} } else {

		$sql = "INSERT INTO cart (u_id, p_id, v_id, price, quantity, date)
		VALUES ('$u_id', '$p_id', '$v_id', '$price', '$quantity', '$date2')";
		if ($conn->query($sql) === TRUE) { }
		else {
			echo "ERROR" . $sql . "<br>" . $conn->error;
		}

	}

}

$conn->close();
?>















