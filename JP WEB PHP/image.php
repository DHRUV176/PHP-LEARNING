<?php 
error_reporting(0);
?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>IMAGE IN PHP</title>
 </head>
 <body>
 <form action="" method="POST" enctype="multipart/form-data">
 	<input type="file" name="uploadfile" value="">
    <input type="submit" name="submit" value="Upload File">
 </form>
 </body>
 </html>

 <?php 
 // $folder = "student/";

 $filename = $_FILES["uploadfile"]["name"];
 $tempname = $_FILES["uploadfile"]["tmp_name"];
 $folder = "student/". $filename;
 //echo $folder;
 move_uploaded_file($tempname, $folder);
 echo "<img src='$folder' height='100' width='100'>";
 ?>