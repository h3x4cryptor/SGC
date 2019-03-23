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

			</ul>
			<h6 stule="padding-left:60px">-DB Creation</h6>
			<ul style="font-size:12px;">

                        <li><a href="../create-table-salesmen.php">Create new salesmen table IF not exist in DB url(../create-table-salesmen.php)</a></li>
                        <li><a href="../create-table-products.php">Create new products table IF not exist in DB url(../create-table-products.php)</a></li>
                        <li><a href="../create-table-items.php">Create new items table IF not exist in DB url(../create-table-items.php)</a></li>
                        <li><a href="../create-table-urgent.php">Create new urgent table IF not exist in DB url(../create-table-urgent.php)</a></li>

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
                        <img src="https://ipool.remotewebaccess.com/wp-content/uploads/2019/03/GitHub-Mark-32px.png" width="18px" height="18px" />  <a style="font-size:14px" href="https://github.com/h3x4cryptor/SGC">GitHub</a></i>
			<p style="font-size:10px;padding-left:40px">- get involved and <code>git clone https://github.com/h3x4cryptor/SGC.git</code></p> 
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
