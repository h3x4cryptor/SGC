<?php
include "dbconnect.php";

session_start();


    if(isset($_POST['make'])) {
            $sql="INSERT INTO urgent (chk, po, branch, salemanid, materialnumber, productname, qty, free, price, qrcode, sku) VALUES ('chk','$_POST[po]','$_POST[branch]','$_SESSION[salemanid]','$_POST[order]','productname','$_POST[qty]','$_POST[free]','$_POST[price]','qrcode', 'sku')";
            if ($conn->query($sql) === TRUE) {
                header("Location: urgent-po-created.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        
