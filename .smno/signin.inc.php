<?php
session_start();
if(isset($_POST['loginbutton'])) {
    include 'db.php';
    $username =  $conn->real_escape_string($_POST['username']);
    $uid =  $conn->real_escape_string($_POST['uid']);
    $pass =  $conn->real_escape_string($_POST['pass']);
    $email =  $conn->real_escape_string($_POST['email']);
    $status =  $conn->real_escape_string($_POST['status']);
    $joined =  $conn->real_escape_string($_POST['joined']);
    if (empty($username) || empty($pass)) {
        header("Location: ./index.php?login=empty");
        $msg = "error..!";
        exit();
    } else {
        $sql = "SELECT * FROM i_users WHERE username = '$username'"; 
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1)  {       
            header("Location: ./index.php?login=error");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                $hashedPwdCheck = password_verify($pass, $row['pass']);
                $hashedUUIDCheck = password_verify($UUID, $row['UUID']);
                if ($hashedPwdCheck == false) {
                header("Location: ./index.php?login=error");
                exit();
            } elseif ($hashedPwdCheck == true) {
                session_start();
                $_SESSION["username"] = $row['username'];
                $_SESSION["email"] = $row['email'];
                $_SESSION["joined"] = $row['joined'];
                $_SESSION["status"] = $row['status'];
                $_SESSION['picture'] = $row['picture'];
                $_SESSION['hashedUUIDCheck'] = $row['hashedUUIDCheck'];
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
header("Location: register.php");
    exit();
}
