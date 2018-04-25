<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vote for your fav Character!</title>
   <meta name="viewport" content="width=device-width, initial-scale=1"> 

    <?php 
        include 'includes/links.php'; 
   ?> 
</header>
</head>
<body class="admin">
    <header>
    <?php 
        include 'includes/nav.php'; 
   ?>  
</header>
    <div class="wrapper">
        <h2>Vote for your fav character</h2>
        <p>Please choose one</p>
        <form action="vote.php" method="post">

            <div class="form-group">
                <input class="together" type="radio" name="vote" class="form-control" value="mickey"> Mickey <br>
                <input class="together" type="radio" name="vote" class="form-control" value="stich"> Stich <br>
                <input class="together" type="radio" name="vote" class="form-control" value="simba"> Simba <br>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
            <p>Go to<a href="admin.php"> Administration panel</a>.</p>
            <br>
        </form>
    </div>    
</body>
</html>