<?php
if(isset($_POST['loginsmno'])) {
    include_once 'db.php';
    $salemanid = $conn->real_escape_string($_POST['salemanid']);
    $salemanpwd =  $conn->real_escape_string($_POST['pass']);
    

    if (empty($salemanid) {
        header("Location: ./index.php?login=empty");
        $msg = "error..!";
        exit();
    } else {
        $sql = "SELECT * FROM salesmen WHERE salemanid = '$salemanid'"; 
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1)  {       
            header("Location: ./index.php?login=error1");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                $hashedPwdCheck = password_verify($pass, $row['hashedPwd']);
                if ($hashedPwdCheck == false) {
                header("Location: ./index.php?login=error2");
                exit();
            } elseif ($hashedPwdCheck == true) {
                session_start();
                $_SESSION["salemanid"] = $row['salemanid'];
                $_SESSION["email"] = $row['email'];
                $logged_in = 1;

                $session    = session_id();
                $time       = time();
                $time_check = $time-600;     //We Have Set Time 5 Minutes
                header("Location: ./index.php?login=🔐success");
                exit();                
           }
        }
    }
}
} else {
header("Location: 404.php");
    exit();
}