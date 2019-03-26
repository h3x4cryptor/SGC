<?php


    echo '<br />';


    $data = array(
        [0] => array("000033333", "40958987", "303888", "56060506", "3333"),
        [1] => array("000033334", "40958988", "303889", "56060507", "4444"),
        [2] => array("000033335", "40958989", "303890", "56060508", "5555")
    );



echo "<h2>YOU ARE HERE</h2>";


$insert = array(ordernumber => "000333", po => "405998988", branch => "303888", salemanid => "1711", materialnumber => "49029323", productname => "ALSHIFA HONEY 160gm", qty => "15", free => "0", price => "130" );
 $resultStrings = $insert;
 foreach ($array as $key => $values) {
    $subarrayString = "('$key','" . implode($values, "','") . "')";
    $resultStrings[] = $subarrayString;
 }

 $result = implode($resultStrings, ",");
	echo "<br /><br />";


	include "dbconnect.php";
	$sql = "INSERT INTO orders (ordernumber, po, branch, salemanid, materialnumber, productname, qty, free, price) VALUE '$result[0]', '$result[1]',  '$result[2]',  '$result[3]',  '$result[4]',  '$result[5]', '$result[6]', '$result[7]',  '$result[8]',     ";



if ($conn->query($sql) === TRUE) {
    echo "Records added successfully";
} else {
    echo "Error inserting $result INTO orders table: " . $conn->error;
}

$conn->close();



