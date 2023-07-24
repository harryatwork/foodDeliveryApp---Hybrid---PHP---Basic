<?php 
 include('../db.php'); 
  include('dashboard.php'); 


$name = $_POST['name'];
$category = $_POST['category'];

$pcom = $_POST['pcom'];

$pricee = $_POST['price'];

$comm = ($pricee * ($pcom/100));

$price = $pricee + $comm;

$quantity = $_POST['quantity'];


$v_id = $_POST['v_id'];






$date = date_default_timezone_set('Asia/Kolkata');
$date = date('M-d,Y H:i:s');
$date2 = date('M-d,Y');



$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO products (name, v_id, cat, price, quantity, date)
VALUES ('$name', '$v_id', '$category',  '$price', '$quantity', '$date2')";
 
if ($conn->query($sql) === TRUE) {



	echo '<script language="javascript">';
		echo 'alert("Product has been Added successfully.")';
		echo '</script>';
		echo '<a href="productadd.php"></a>';



}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
