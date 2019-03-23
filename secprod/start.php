<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunbulah Group Login Portal</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>



<?php include "inc/header.php"; ?>
<body class="bg-light">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
       <p>&larr; <a href="index.global.php">Home</a>
<?php
if (isset($_SESSION['username'])) {
echo '<h2>You are loggend in <a href="">click here</a> to logout or \n go to your <a href="./timeline.php">timeline</a> page.</h2>';
} else {
echo '<h4>Login</h4>
        <form action="responce.php" method="POST">
            <div class="form-group">
                <label for="salemanid">ID#</label>
                <input class="form-control" max-length="4" min-length="4" type="number" name="salemanid" placeholder="0000" />
            </div>
            <div class="form-group">
                <label for="pwd">Password</label>
                <input class="form-control" type="password" name="pwd" placeholder="Passphrase" />
            </div>
            <input type="submit" class="btn btn-success btn-block" name="login" value="Login" />
        </form>';?>
        <?php include "./inc/access-top.php"; ?>
      <?="</div>";?> 
<?php include "./inc/access-header-timeline.php"; ?>
    <?='<br />
    <br />
    <br />
    <!--<div class="col-md-6">
        <img class="img img-responsive" src="img/sgn.jpg" />
    </div>-->
    </div>
    <p>Proceed as a <a href="https://github.com/h3x4cryptor/SGC">developer</a></p>
</div>';  
?>
<?php
include "./inc/footer.php";
?>
</body>
</html>

