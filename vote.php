<?php  
	$connect = mysqli_connect("localhost", "urcscon3_phoeni", "coffee1N", "urcscon3_phoeni");
	$vote = $_POST['vote'];
	
	$sql = "INSERT INTO vote(vote) VALUES ('$vote')";
	mysqli_query($connect, $sql);
	header("location: thankyou.php");

	mysqli_close($connect); 
 ?>