<?php
include "dbconnect.php";

if(isset($_POST['request'])) {
        $sql="INSERT INTO salesmen (salemanname, salemanid, dep, jtitle, email, phonenumber, hashedPwd, salt) VALUES ('$_POST[salemanname]','$_POST[salemanid]','$_POST[dep]','$_POST[jtitle]','$_POST[email]','$_POST[phonenumber]','$_POST[pass]','$_POST[pass]')";
        if ($conn->query($sql) === TRUE) {
            header("Location: success.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }

    if(isset($_POST['createproduct'])) {
            $sql="INSERT INTO products (materialnumber, productname, producttype, chk, qty, free, price, sku) VALUES ('$_POST[materialnumber]','$_POST[productname]','$_POST[producttype]','$_POST[chk]','$_POST[qty]','$_POST[free]','$_POST[price]','$_POST[sku]')";
            if ($conn->query($sql) === TRUE) {
                header("Location: products.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

$conn->close();







?>