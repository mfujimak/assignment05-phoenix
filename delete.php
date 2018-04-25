<?php  
	$connect = mysqli_connect("localhost", "urcscon3_phoeni", "coffee1N", "urcscon3_phoeni");
	$sql = "DELETE FROM users WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>