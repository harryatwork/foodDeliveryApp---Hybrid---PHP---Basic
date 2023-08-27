<?php
include ('../db.php'); 
	//15 2 2015
	session_start();
	$email = $_REQUEST["email"];
	$password = md5($_REQUEST["password"]);

    
    $s = "select * from admin where email='".$email."' and password = '".$password."'";
    
    $result = mysqli_query($conn,$s);
    
    $count = mysqli_num_rows($result);
    
    if($count>0)
    {
		$_SESSION["email"] = $email; 
		$_SESSION["password"] = $password;
        $_SESSION["login"]="1";
        header("location:dashboard.php");
    }
    else
    {
	       header("location:index.php");   
      echo '<script language="javascript">';
      echo 'alert("The email or password you entered is incorrect..")';
      echo '</script>';
  }

?>






