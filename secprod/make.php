<?php
include "dbconnect.php";

session_start();






    if(isset($_POST['make'])) {

        $sql = array(); 
        foreach( $data as $row ) {
            $sql[] = '("'.mysql_real_escape_string($row['chk']).'", '.$row['po'].', '.$row['branch'].', '.$row['salemanid'].', '.$row['materialnumber'].', '.$row['productname'].', '.$row['qty'].', '.$row['free'].'), '.$row['price'].'), '.$row['qrcode'].', '.$row['sku'].')';
        }
        mysql_query('INSERT INTO urgent (chk, po, branch, salemanid, materialnumber, productname, qty, free, price, qrcode, sku) VALUES '.implode(',', $sql));



            //$sql="INSERT INTO urgent (chk, po, branch, salemanid, materialnumber, productname, qty, free, price, qrcode, sku) VALUES ('$_POST[chk]','$_POST[po]','$_POST[branch]','$_SESSION[salemanid]','$_POST[materialnumber]','$_POST[productname]','$_POST[qty]','$_POST[free]','$_POST[price]','qrcode', '$_POST[sku]')";

        }

        