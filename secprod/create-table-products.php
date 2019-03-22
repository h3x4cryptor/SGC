<?php
include "dbconnect.php";
$sql = "CREATE TABLE IF NOT EXISTS `products` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `materialnumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `productname` varchar(255) COLLATE utf8_unicode_ci NULL,
    `producttype` varchar(255) COLLATE utf8_unicode_ci NULL,
    `chk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `qty` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `free` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `sku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
    `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
    PRIMARY KEY (`id`)
  ) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ";

if ($conn->query($sql) === TRUE) {
    echo "Table products created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();