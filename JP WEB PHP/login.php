<?php
session_start();
include("connection.php");
//error_reporting(0);
?>

<form action="" method="POST">

User Name:<input type="text" name="username" value=""><br><br>
Password:<input type="password" name="password" value=""><br><br>
<input type="submit" name="submit" value="Login">
</form>

<?php

if(isset($_POST['submit']))
{
	$user = $_POST['username'];
	$pwd = $_POST['password'];
	$query = "SELECT * FROM student WHERE username='$user' && password='$pwd' ";

	$data = mysqli_query($conn,$query);

	$total = mysqli_num_rows($data);
    
    if ($total==1) 
    {
    	$_SESSION['user_name'] = $user;
    	header('location:home.php');
    }
    else
    {
    	echo "<font color='red'>Login Unccessful !!!";
    }
}



?>