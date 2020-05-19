<?php

include("connection.php");
$rollno = $_GET['rn'];
$query = "DELETE FROM student WHERE ROLLNO='$rollno' ";

$data = mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('SUCCESSFULLY Record DELETE')</script>";
    ?>
         <meta http-equiv="refresh" content="0; url=display.php">
    <?php
}
else
{
	echo "<font color='red'><i>Sorry..!!! Record Not Delete !!!<i>";
}
?>