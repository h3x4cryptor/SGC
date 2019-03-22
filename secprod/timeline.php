<?php require_once("dbconnect.php"); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunbulah Group Timeline</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['photo'] ?>" />
                    <h3><?php echo  $_SESSION['salemanname']; ?></h3>
                    <p>ID# <?php echo $_SESSION['salemanid']; ?></p>
                    <p><a href="logout.php">Logout</a></p>
                    <form action="upload.php" method="post">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="upload">
                    </form>
                </div>
            </div>            
        </div>
        <div class="col-md-8">
            <form action="" method="post" />
                <div class="form-group">
                    <textarea class="form-control" placeholder="Whats Up ?"></textarea>
                </div>
            </form>
            <?php for($i=0; $i < 6; $i++){ ?>
            <div class="card mb-3">
                <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis veritatis nemo ad recusandae labore nihil iure qui eum consequatur, officiis facere quis sunt tempora impedit ullam reprehenderit facilis ex amet!
                </div>
            </div>
            <?php } ?>           
        </div>   
    </div>
</div>
</body>
</html>