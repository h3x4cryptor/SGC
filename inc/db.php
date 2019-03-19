<?php $dserver = "localhost";
$duser = "root";
$dpassword = "Qcard420";
$dbname = "SGDB";
// Create connection
$conn = new mysqli($dserver, $duser, $dpassword, $ddbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 