<?php

if (isset($_POST['logoutbutton'])) {
    session_start();
    session_unset();
    session_destroy();
    echo "Logged out";
header('Location: index.php');
exit();
}

?>