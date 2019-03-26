<?php
include "dbconnect.php";
session_start();
    if(isset($_POST['make'])) {


        $array = array([
            po => 'sale',
            branch => 'sale',
            salemanid => 'sale',     
            array([materialnumber => 'sale',
            productname => 'product',
            qty => 'test',
            free => 'test',
            price => 'test',
            sku => 'sku')) ;
            print_r( $array );
    }