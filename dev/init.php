<?php
$servername = "localhost";
$username = "root";
$password = "Qcard420";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




// Create database
$sql = "CREATE DATABASE sgdb0";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully, <a href='create-table.php'>proceed</a> to create tables.";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>