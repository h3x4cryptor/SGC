<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunbulah Group | Administrators Portal</title>
     <link rel="stylesheet" href="../css/bootstrap.css" />
</head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <i class="fa-fa-tachometer"></i><h4> Sunbulah Group Administrators Portal</h4>
                    </div>
                    <div class="col-md-4">
                        <!--<a href="start.php" class="btn btn-primary">Start</a>-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br />


    <section>
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!--<center><img class="img img-responsive" src="../img/sgn.jpg" /></center>-->
                        <h5>Back-end links</h5>
                        <ul style="font-size:12px;">
                        <li><a href="../create-product.php">Create new product in DB url(../create-product.php</a></li>
                        <li><a href="../products.php">List all products in DB url(../products.php)</a></li>
                        <li><a href="../add.php">Add new staff member into DB url(../add.php)</a></li>
                        <li><a href="../staff.php">List all active staff members in DB url(../staff.php)</a></li>
                        <li><a href="../urgent.php">Create urgent PO form (test) in DB url(../urgent.php)</a></li>
                        <li><a href="../urgent-po-created.php">List all urgent PO's in DB url(../urgent-po-created.php)</a></li>
                        <li></li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <section>
        <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!--<center><img class="img img-responsive" src="../img/sgn.jpg" /></center>-->
                        <h5>Front-end links</h5>
                        <ul style="font-size:12px;">
                        <li><a href="../index.global.php">Sunbulah Group Home page url(../index.global.php)</a></li>
                        <li><a href="../start.php">Start page for $_SESSION initiation url(../start.php)</a></li>
                        <li><a href="../timeline.php">Staff members home page with registered $_SESSION url(../timeline.php)</a></li>
                        <li></li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>
</pre></code>

    <br />

    <section>
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <center><img class="img img-responsive" src="../img/sgn.jpg" /></center>
                    </div>
                </div>
            </div>
    </section>

</body>


<br />
<br />

<?php
include "../inc/footer.php";
?>
</html>