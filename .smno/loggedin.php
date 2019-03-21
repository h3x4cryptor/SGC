<?php 
session_start();


echo "<h1 style='color:green;'>Successfully Logged In";
?>


Welcome <?php echo $_SESSION['username'];?>

<p>Your email address is: <?php echo $_SESSION['email'];?>

<br />
<br />
<br />
<a href="logout.inc.php">logout</a>