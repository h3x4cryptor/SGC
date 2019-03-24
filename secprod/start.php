<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunbulah Group Login Portal</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
</head>


<?php include "./inc/header.php"; ?>

<body class="bg-light"><br /> <br /> 
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
<?php
if (isset($_SESSION['salemanid'])) {
echo '<h5>You are loggend in <a href="logout.php">click here</a> to logout or go to your <a href="./timeline.php">timeline</a> page.</h5></div></div></div>';
include "./inc/footer.php";

} else {
echo '

<p>&larr; <a href="index.global.php">Home</a>

<h4>Login</h4>
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
      <?php echo "</div>";?> 
<?php include "./inc/access-header-timeline.php"; ?>

    <?php 
    

    echo '<br />
    <br />
    <br />
    <!--<div class="col-md-6">
        <img class="img img-responsive" src="img/sgn.jpg" />
    </div>-->
    </div>
    <p>Proceed as a <a href="https://github.com/h3x4cryptor/SGC">developer</a></p>
</div>';  

}
?>

</body>
</html>

