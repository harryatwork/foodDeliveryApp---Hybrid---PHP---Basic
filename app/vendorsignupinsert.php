<?php include('db.php'); ?>
<?php include('index.php'); ?>

<?php



if(isset($_POST['submit'])){
    
    
$business = $_POST['business'];
$aperson = $_POST['aperson'];
$city = $_POST['city'];
$location = $_POST['location'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$status = $_POST['status'];

$date = date_default_timezone_set('Asia/Kolkata');
$date = date('M-d,Y H:i:s');
$date2 = date('M-d,Y');



$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
    
    
            $sql="select * from vendors where (email='$email');";
            $res=mysqli_query($conn,$sql);
            if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            
            if($email==$row['email'])
            {
            
            echo '<script language="javascript">';
			echo 'alert("It seems like you already hold an account with us. Please try Signing In.")';
			echo '</script>';
			echo '<a href="index.php"></a>';
			
            }
        }else { //here you need to add else condition
            $sql2 = "INSERT INTO vendors (business, aperson, location, mobile, email, password, city, status, date)
			VALUES ('$business', '$aperson', '$location', '$mobile', '$email', '$password', '$city', '$status', '$date2')";
			if ($conn->query($sql2) === TRUE) {
				
			echo '<script language="javascript">';
			echo 'alert("Thank you for Your Interest. Please wait while Admin Activates your Profile")';
			echo '</script>';
			echo '<a href="index.php"></a>';
				
			}

			else {

			echo "ERROR" . $sql2 . "<br>" . $conn->error;
			}
        }
 }
$conn->close();
 
?>