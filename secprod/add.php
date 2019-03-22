


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                <p>&larr; <a href="index.global.php">Home</a>
                <h4>Add new employee access...</h4>
                <p>Already rigesterd? <a href="start.php">Login here</a></p>
           <form method="POST" action="responce.php">
            <br />           
            <div class="form-group">
                    <label for="salemanname">Full Name</label>
                    <input class="form-control" type="text" class="input" name="salemanname" placeholder="Employee Full Name..." /><br />
            </div>   
            <div class="form-group">
                    <label for="salemanid">Employee ID#</label>
                    <input class="form-control" type="number" class="input" name="salemanid" placeholder="0000" /><br />
            </div>
            <div class="form-group">
                    <label for="dep">Department</label>                 
                    <input class="form-control" type="text" class="input" name="dep" placeholder="Department..." /><br />
            </div>    
            <div class="form-group">
                    <label for="jtitle">Role</label>
                    <input class="form-control" type="text" class="input" name="jtitle" placeholder="Jop Title..." /><br />
                    </div>  

       <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
       <div class="form-group">
                    <label for="email">Email Address</label>
                    <input class="form-control" value="<?php echo $email; ?>" type="email" name="email" placeholder="example@sunbulahgroup.com" /><br />
            </div>
      <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
</div>

            <div class="form-group">
                    <label for="phonenumber">Phone Number</label>
                    <input class="form-control" type="number" class="input" name="phonenumber" placeholder="05xxxxxxxx" /><br />
            </div>
            <div class="form-group">
                    <label for="pwd">Passwoed</label>
                    <input class="form-control" type="password" class="input" name="pwd" placeholder="Password..." /><br />
            </div> 
                    <input class="btn btn-primary" type="submit" value="Register" name="request"/>
            </form>
        </div>
        <br />
        <br />

        <div class="col-md-6">
                <img class="img img-responsive" src="img/sgn.jpg" />
        </div>
    </div>
</body>
</html>