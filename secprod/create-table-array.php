<?php
include "dbconnect.php";
$sql = "CREATE TABLE `sgdb0`.`array` ( 
    `ordernumber` INT(11) NOT NULL AUTO_INCREMENT ,
    `po` VARCHAR(255) NOT NULL ,
    `branch` VARCHAR(255) NOT NULL ,
    `materialnumber` VARCHAR(255) NOT NULL ,
    `sku` VARCHAR(255) NOT NULL ,
    PRIMARY KEY (`ordernumber`)) ENGINE = InnoDB;";
if ($conn->query($sql) === TRUE) {
    echo "Table array created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();