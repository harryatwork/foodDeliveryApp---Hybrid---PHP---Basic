<?php include('db.php'); 

if(isset($_POST['submit'])){
    
    
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$date = date_default_timezone_set('Asia/Kolkata');
$date = date('M-d,Y H:i:s');
$date2 = date('M-d,Y');



$conn = new mysqli ($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
    
    
            $sql="select * from users where (email='$email');";
            $res=mysqli_query($conn,$sql);
            if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            
            if($email==$row['email'])
            {
            
				header("location:signup.php?error=exists"); 
				
            }
        }else { //here you need to add else condition
            $sql2 = "INSERT INTO users (fname, lname, mobile, email, password, date)
			VALUES ('$fname', '$lname', '$mobile', '$email', '$password', '$date2')";
			if ($conn->query($sql2) === TRUE) {
				
                session_start();
				$_SESSION["email"] = $email; 
				$_SESSION["login"]="1";
				
				header("location:index.php"); 
			}

			else {

			echo "ERROR" . $sql2 . "<br>" . $conn->error;
			}
        }
 }
$conn->close();
 
?>