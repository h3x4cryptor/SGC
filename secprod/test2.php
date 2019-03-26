


<?php
 include "dbconnect.php";

 // prepare and bind
$stmt = $conn->prepare("INSERT INTO array (ordernumber, po, branch, materialnumber, sku) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $ordernumber, $po, $branch, $$materialnumber, $sku);


// set parameters and execute
$ordernumber = "John";
$po = "409090889";
$branch = "john@example.com";
$materialnumber = "60960016";
$sku = "1233";
$stmt->execute();

$ordernumber = "John";
$po = "409090889";
$branch = "john@example.com";
$materialnumber = "60960016";
$sku = "1233";
$stmt->execute();

$ordernumber = "John";
$po = "409090889";
$branch = "john@example.com";
$materialnumber = "60960016";
$sku = "1233";
$stmt->execute();
echo "New records created successfully";


foreach( $rows as $stmt) {
$args = array_fill(0, count($rows[0]), '?');
}
print_r($args);