<?php
// how to create ariable and join 
//$name = "VIDHI N";
//$age = "25 years OLD";
//echo "My name is ".$name. " and I am ".$age;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dnp1";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
  //echo "Connection Successfully !!!";
}
else
{
	//error function is show that what is your error
	die("Connection Failed Because : ".mysqli_connect_error()); 
}


?>
