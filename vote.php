<?php  
	$connect = mysqli_connect("localhost", "urcscon3_phoeni", "coffee1N", "urcscon3_phoeni");
	$id = $_POST["id"];  
	$vote = $_POST['vote']
	
	$sql = "UPDATE users SET "vote"='".$vote."' WHERE id='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Updated';  
	} 

	mysqli_close($connection); 
 ?>