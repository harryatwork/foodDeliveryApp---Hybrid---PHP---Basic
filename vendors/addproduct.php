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
$description = $_POST['description'];


$v_id = $_POST['v_id'];

$date = date_default_timezone_set('Asia/Kolkata');
$date = date('M-d,Y H:i:s');
$dater = date('Y-m-d');
$date2 = date('M-d,Y');
$dateAdded = date('His');

$targetDir = "../images/products/";
$targetFileNameArray = explode('.', basename($_FILES["fileToUpload"]["name"]));
$targetFileName = $targetFileNameArray[0].$dateAdded.$targetFileNameArray[1];
$targetFile = $targetDir . $targetFileName;
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));


$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO products (name, v_id, cat, price, quantity, description, image, date)
VALUES ('$name', '$v_id', '$category',  '$price', '$quantity', '$description', '$targetFileName', '$dater')";
 
if ($conn->query($sql) === TRUE) {



	if(isset($_FILES["fileToUpload"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
			echo '<script language="javascript">';
			echo 'alert("File is not an image.")';
			echo '</script>';
			echo '<a href="products.php"></a>';
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Limit file size (you can adjust the size as needed)
    if ($_FILES["fileToUpload"]["size"] > 500000) {
		echo '<script language="javascript">';
		echo 'alert("Sorry, your file is too large.")';
		echo '</script>';
		echo '<a href="products.php"></a>';
        $uploadOk = 0;
    }

    // Allow certain file formats (in this example, only images)
    // if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") {
	// 	echo '<script language="javascript">';
	// 	echo 'alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.")';
	// 	echo '</script>';
	// 	echo '<a href="productadd.php"></a>';
    //     $uploadOk = 0;
    // }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
		echo '<script language="javascript">';
		echo 'alert("Sorry, your file was not uploaded.")';
		echo '</script>';
		echo '<a href="products.php"></a>';
    // If everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            // echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";

			echo '<script language="javascript">';
			echo 'alert("Product has been Added successfully.")';
			echo '</script>';
			echo '<a href="products.php"></a>';

        } else {
			echo '<script language="javascript">';
			echo 'alert("Sorry, your file was not uploaded.")';
			echo '</script>';
			echo '<a href="products.php"></a>';
        }
    }



}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
