<?php

session_start();
session_unset("salemanid");
header("Location: index.global.php");