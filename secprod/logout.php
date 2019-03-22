<?php

session_start();
session_unset("salemanname");
header("Location: index.global.php");