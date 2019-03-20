<!DOCTYPE HTML>
<html>
	<head>
		<title>Miniport by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

<h3><i class="icon fa fa-plus"> Add Saleman:</h3></i>
        <form method="POST" action="./insert-saleman.php">
            <br />
            <input class="form-control" minlength="3" type="text" class="input" name="salemanname" placeholder="Full Name..." /><br />
            <input class="form-control" minlength="3" type="text" class="input" name="salemanid" placeholder="Employee ID#" /><br />
            <input class="form-control" minlength="3" type="text" class="input" name="dep" placeholder="Department..." /><br />
            <input class="form-control" minlength="3" type="text" class="input" name="jtitle" placeholder="Job Title..." /><br />
            <input class="form-control" minlength="3" type="email" class="input" name="email" placeholder="example@sunbulahgroup.com" /><br />
            <input class="form-control" minlength="3" type="text" class="input" name="phonenumber" placeholder="+9665xxxxxxx" /><br />
            <input class="form-control" minlength="3" type="password" class="input" name="pass" placeholder="Password..." /><br />
            <input class="form-control" minlength="3" type="password" class="input" name="cpass" placeholder="Confirm your password..." /><br /><br /><br />
            <input class="btn btn-primary" type="submit" value="Add" name="add-saleman-button"/>
        </form>