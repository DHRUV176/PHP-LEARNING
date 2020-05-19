
<?php  
include("connection.php");
error_reporting(0);

$_GET['rn'];
$_GET['sn'];
$_GET['cl'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>DATABASE PHP LEARN</title>
</head>
<body>
<h1><center>UPDATE</center></h1>

<form action="" method="GET">
Roll No <input type="text" name="rollno" value="<?php echo $_GET['rn']; ?>"/><br><br>
Name <input type="text" name="studentname" value="<?php echo $_GET['sn']; ?>"/><br><br>
Class <input type="text" name="class" value="<?php echo $_GET['cl']; ?>"/><br><br>

<input type="submit" name="submit" value="Update"><br><br>
		
</form>

<?php

if ($_GET['submit']) 
{

   $rollno = $_GET['rollno'];
   $name  = $_GET['studentname'];
   $class = $_GET['class'];

	$query = "UPDATE student SET NAME='$name', CLASS=' $class' WHERE ROLLNO = '  $rollno' "; 
	$data = mysqli_query($conn,$query);
	if ($data) {
		echo "<font color='green'>Record SUCCESSFYLLY Update. <a href='display.php'>Check Update List Here</a>";	
	}
	else{
		echo "<font color='red'><i>Record NOT SUCCESSFYLLY Update</i>";
	}
}
else
{
	echo "<font color='blue'>Click on Update Button to Save the Change";
}

/* $rn = $_GET['rollno'];
$sn = $_GET['studentname'];
$cl = $_GET['class'];

//echo $rn;
//echo $sn;
//echo $cl;

$query = "INSERT INTO student VALUE('$rn','$sn','$cl')";

$data = mysqli_query($conn,$query);
if ($data) {
	echo "DATABASE SUCCESSFYLLY INSERT...";
} */
?>

</body>
</html>





