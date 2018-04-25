<?php  
$connect = mysqli_connect("localhost", "urcscon3_phoeni", "coffee1N", "urcscon3_phoeni");
$sql = "INSERT INTO users(vote) VALUES('".$_POST["username"]."', '".$_POST["vote"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>