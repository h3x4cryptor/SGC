<?php
include "dbconnect.php";
$sql = "CREATE TABLE `sgdb0`.`items` (
    `id` INT(11) NOT NULL AUTO_INCREMENT ,
    `materialnumber` VARCHAR(255) NOT NULL ,
    `productname` VARCHAR(255) NOT NULL ,
    `price` VARCHAR(255) NOT NULL ,
    `qrcode` VARCHAR(255) NOT NULL ,
    `url` VARCHAR(255) NOT NULL ,
    `sku` varchar(255) NOT NULL,
    `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`id`),
    FOREIGN KEY (price) REFERENCES products(price),
    FOREIGN KEY (sku) REFERENCES products(sku),
    FOREIGN KEY (productname) REFERENCES products(productname),
    FOREIGN KEY (materialnumber) REFERENCES products(materialnumber)) ENGINE = InnoDB;";

if ($conn->query($sql) === TRUE) {
    echo "Table items created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();