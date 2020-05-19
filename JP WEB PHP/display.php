<style>
td{
	padding: 15px;
}
</style>


<?php 

// HOW TO CALL DATA INTO DATABASE

include("connection.php");
error_reporting(0);
$query = "SELECT * FROM student";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
//$result = mysqli_fetch_assoc($data);
//echo $result['rollno']." ".$result['name']." ".$result['class'] ;

if ($total != 0 ) {
	//echo "Table has Records";

	?>
        <table>
        	<tr>
        		<th>ROLL NO</th>
        		<th>IMAGE</th>
        		<th>NAME</th>
        		<th>CLASS</th>
        		<th colspan="2">OPERATIONS</th>
        	</tr>
        

	<?php
	while ($result = mysqli_fetch_assoc($data)) {
		echo "<tr>
        		<td>".$result['rollno']."</td>
        		<td><a href='$result[picsource]'><img src='".$result['picsource']."' height='100' width='100'></a></td>
        		<td>".$result['name']."</td>
        		<td>".$result['class']."</td>
        		<td><a href='update.php?rn=$result[rollno]&sn=$result[name]&cl=$result[class]'>Edit</a></td>
        		<td><a href='delete.php?rn=$result[rollno]' onclick='return checkdelete()'>Delete</a></td>
        	</tr>";
     //echo $result['rollno']." ".$result['name']." ".$result['class']."<br>";
	}
}
else
{

    echo "No Record Found";
}
?>

</table>

<script>
	function checkdelete()
	{
       return confirm('Are You Sure You Want to Delete This Data ???');

	}


</script>