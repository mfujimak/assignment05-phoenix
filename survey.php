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
   <meta name="viewport" content="width=device-width, initial-scale=1"> 
   <header>
    <?php 
        include 'includes/links.php'; 
   ?> 
</header>
</head>
<body class="admin">
    <?php 
        include 'includes/nav.php'; 
   ?>  
    <div class="wrapper">
        <h2>Vote for your fav character</h2>
        <p>Please choose one</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group">
                <input class="together" type="radio" name="vote" class="form-control" value="mickey"> Mickey <br>
                <input class="together" type="radio" name="vote" class="form-control" value="stich"> Stich <br>
                <input class="together" type="radio" name="vote" class="form-control" value="simba"> Simba <br>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>    
</body>
</html>