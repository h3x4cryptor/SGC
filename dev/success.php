<?php
include "dbconnect.php";

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


