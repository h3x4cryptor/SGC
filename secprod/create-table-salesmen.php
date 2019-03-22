<?php
include "dbconnect.php";
$sql = "CREATE TABLE IF NOT EXISTS `salesmen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `salemanname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salemanid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dep` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jtitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hashedPwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg',
  `created_on` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ";

if ($conn->query($sql) === TRUE) {
    echo "Table salesmen created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();