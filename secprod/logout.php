<?php

session_start();
session_unset("salemanid");
session_destroy(); 
header("Location: ./start.php");