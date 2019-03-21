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

$sql = "SELECT * FROM salesmen";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["salemanname"]. " ID# " . $row["salemanid"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


echo "1 record created";