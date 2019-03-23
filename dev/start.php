<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sunbulah Group Login Portal</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
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

        </form>

        </div>

        <br />
        <br />
        <br />
        <div class="col-md-6">
            <img class="img img-responsive" src="img/sgn.jpg" />
        </div>


    </div>
    <p>Proceed as a <a href="https://github.com/h3x4cryptor/SGC">developer</a></p>

</div>
    
</body>
</html>