<?php  
include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title>DATABASE PHP LEARN</title>
</head>
<body>
<h1><center>WELCOME</center></h1>

<form action="" method="POST" enctype="multipart/form-data">
Roll No <input type="text" name="rollno" value=""/><br><br>
Name <input type="text" name="studentname" value=""/><br><br>
Class <input type="text" name="class" value=""/><br><br>

Upload Image <input type="file" name="uploadfile" value=""><br><br>

<input type="submit" name="submit" value="Submit">
		
</form>

<?php

if ($_POST['submit']) 
{
	$rn = $_POST['rollno'];
    $sn = $_POST['studentname'];
    $cl = $_POST['class'];

     $filename = $_FILES["uploadfile"]["name"];
     $tempname = $_FILES["uploadfile"]["tmp_name"];
     $folder = "student/". $filename;
     //echo $folder;
     move_uploaded_file($tempname, $folder);

	if ($rn!="" && $sn!="" && $cl!="" && $filename!="") {
		$query = "INSERT INTO student VALUE('$rn','$sn','$cl','$folder')";

       $data = mysqli_query($conn,$query);
          if ($data) {
	          echo "DATABASE SUCCESSFYLLY INSERT...";
           }
	}
	else
	{
		echo "ALL FIELDS ARE REQUIRED";
	}
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





