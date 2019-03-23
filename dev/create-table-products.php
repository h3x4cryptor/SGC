<?php
include "dbconnect.php";
$sql = "CREATE TABLE `sgdb0`.`products` (
    `id` INT(11) NOT NULL AUTO_INCREMENT ,
    `materialnumber` VARCHAR(255) NOT NULL ,
    `productname` VARCHAR(255) NOT NULL ,
    `producttype` VARCHAR(255) NOT NULL ,
    `price` VARCHAR(255) NOT NULL ,
    `sku` varchar(255) NOT NULL,
    `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`id`),
    INDEX `product_price` (`price`),
    INDEX `product_sku` (`sku`),
    INDEX `product_number` (`materialnumber`),
    INDEX `product_name` (`productname`)) ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
    echo "Table products created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();