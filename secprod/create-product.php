<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunbulah Group | Create Product.</title>

     <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <header>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Create New Product.</h3>
                        
                    </div>
                    <div class="col-md-4">
                     <!--<a href="start.php" class="btn btn-primary">Start</a>-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br />
    <br />

    <section>
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
<form method="POST" action="responce.php">
    <br />
    <input class="form-control" type="text" class="input" name="materialnumber" placeholder="Material Number" /><br />
    <input class="form-control" type="text" class="input" name="productname" placeholder="Product Name" /><br />
    <input class="form-control" type="text" class="input" name="producttype" placeholder="Product Type..." /><br />
    <input class="form-control" type="text" class="input" name="price" placeholder="$ Price" /><br />
    <input class="form-control" type="text" class="input" name="sku" placeholder="SKU..." /><br />
    <input class="btn btn-primary" type="submit" value="Add Product" name="createproduct"/>
    </form>




                    </div>

                        <center><img class="img img-responsive" src="img/sgn.jpg" /></center>

                </div>
            </div>
    </section>

</body>
</html>







