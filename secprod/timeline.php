<?php require_once("dbconnect.php"); 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunbulah Group | Staff Timeline</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <i class="fa-fa-tachometer"></i><h3>Staff Timeline</h3>
                        
                    </div>
                    <div class="col-md-4">
                        <!--<a href="start.php" class="btn btn-primary">Start</a>-->
                    </div>
                </div>
            </div>
        </div>
    </header>



<div class="container mt-5">
    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['photo'] ?>" />
                    <h3><?php echo  $_SESSION['salemanname']; ?></h3>
                    <p>ID# <?php echo $_SESSION['salemanid']; ?></p>
                    <p><a href="logout.php">Logout</a></p>
                    <!--<form action="upload.php" method="post">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="upload">
                    </form>-->
                </div>
            </div>            
        </div>
        <div class="col-md-8">
            <form action="" method="post" />
                <div class="form-group">
                    <!--<textarea class="form-control" placeholder="Whats Up ?"></textarea>-->
                </div>
            </form>

            <h4>Services</h4>
        <ol>
        <li><a href="./urgent.php">Create <span style="color:red">Urgent</span> PO.</a></li>
        <li><a href="./regular.php">Create Regular PO.</a></li>
        <li><a href="./export.php">Export Reports.  </a><span style="font-size:12px;">Supported formats:  <span style="color: gray; font-size:10px;"><b>[Excel Sheets][PDF]</b></span></span></li>
        <li><a href="./products.php">Search Products List.</a></li>
        
        </ol>
                 
        </div>   
    </div>
</div>
</body>
<br />
<br />

<?php
include "inc/footer.php";
?>
</html>