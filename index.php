<?php $dserver = "localhost";
$duser = "root";
$dpassword = "Qcard420";
$db = "SGDB";
// Create connection
$conn = new mysqli($dserver, $duser, $dpassword);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  ?>


<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://ipool.remotewebaccess.com/wp-content/uploads/jquery-3.3.1.min.js"></script>
<link rel="manifest" href="https://ipool.remotewebaccess.com/wp-content/public/manifest.json">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<link rel="apple-touch-startup-image" href="https://ipool.remotewebaccess.com/wp-content/uploads/2019/02/iphone-app-launch-scrren.png">
<meta name="apple-mobile-web-app-title" content="SGC">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->
<meta name="viewport" content="width=device-width, initial-scale=1">


<title>SunbulahGroup | Sales Portal</title>





<!-- Add to Homescreen -->

<link rel="stylesheet" type="text/css" href="https://ipool.remotewebaccess.com/wp-content/public/addtohomescreen.css">
<script src="https://ipool.remotewebaccess.com/wp-content/public/addtohomescreen.js"></script>

<script>
addToHomescreen.removeSession();
instance.clearSession();
addToHomescreen();

addToHomescreen({
    detectHomescreen: true
});

  var a = addToHomescreen({
	onAdd: function () {
		alert('Welcome to ATV App, Enjoy Watching..');
	}
});
  
</script>

<!-- Add to Homescreen -->



</head>
<body>



</body>
</html>
