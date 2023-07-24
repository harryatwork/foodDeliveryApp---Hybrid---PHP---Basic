<?php  include('../db.php'); 



$id = $_POST['id'];

$file=($_FILES['file']['name']);

$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE banners SET banner = '$file'
WHERE id = '$id'";


if ($conn->query($sql) === TRUE) {
	$target_dir = "../images/banners/";
	
	
	
$target_file2 = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk2 = 1;
$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

if ($uploadOk2 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file2)) {
	
if($id == '1' || $id == '2' || $id == '3'){
	header("Location: sliders");

}else {
	header("Location: dashboard");
}

} else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
else {
	echo "ERROR" . $sql . "<br>" . $conn->error;
}
$conn->close();

?>