<?php
$servername = "localhost";
$username = "root";
$password = "Qcard420";
$dbname = "sgdb0";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Material: " . $row["materialnumber"]. " - Product: " . $row["productname"]. " ID# " . $row["sku"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


echo "1 record created";