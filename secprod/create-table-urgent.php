<?php
include "dbconnect.php";
$sql = "CREATE TABLE `sgdb0`.`urgent` (
    `id` INT(11) NOT NULL AUTO_INCREMENT ,
    `po` VARCHAR(255) NOT NULL ,
    `chk` VARCHAR(255) NOT NULL ,
    `branch` VARCHAR(255) NOT NULL ,
    `salemanid` INT(11) NOT NULL ,
    `materialnumber` VARCHAR(255) NOT NULL ,
    `productname` VARCHAR(255) NOT NULL ,
    `qty` VARCHAR(255) NOT NULL ,
    `free` VARCHAR(255) NOT NULL ,
    `price` VARCHAR(255) NOT NULL ,
    `qrcode` VARCHAR(255) NOT NULL ,
    `sku` VARCHAR(255) NOT NULL ,
    `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`id`)) ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
    echo "Table urgent created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();