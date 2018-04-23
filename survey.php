<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <?php 
        include 'includes/nav.php'; 
   ?>  
    <div class="wrapper">
        <h2>Vote for your fav character</h2>
        <p>Please choose one</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group">
                <input type="radio" name="vote" class="form-control" value="mickey"> Mickey <br>
                <input type="radio" name="vote" class="form-control" value="stich"> Stich <br>
                <input type="radio" name="vote" class="form-control" value="simba"> Simba <br>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>    
</body>
</html>