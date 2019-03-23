<?php
include "dbconnect.php";

session_start();


    if(isset($_POST['submit'])) {
            $sql="INSERT INTO urgent (chk, po, branch, salemanid, materialnumber, productname, qty, free, price, qrcode, sku) VALUES ('$_POST[chk]','$_POST[po]','$_POST[branch]','$_SESSION[salemanid]','$_POST[materialnumber]','$_POST[productname]','$_POST[qty]','$_POST[free]','$_POST[price]','qrcode', '$_POST[sku]')";
            if ($conn->query($sql) === TRUE) {
                header("Location: urgent-po-created.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        