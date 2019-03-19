<?php


if(isset($_POST['registerbutton'])) {
    include_once 'db.php';
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $pass = $conn->real_escape_string($_POST['pass']);
    $cpass = $conn->real_escape_string($_POST['cpass']);

   //Error handling
    if (empty($username) || empty($email) || empty($pass) || empty($cpass)) {
        header("Location: ./register.php?signup=empty");
        $msg = "error..!";
        exit();
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $username)) {
            header("Location: ./register.php?signup=invalid");
            exit();
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ./register.php?signup=email-err");
                exit();
            } else {
                $sql = "SELECT * FROM i_users WHERE username='$username'";
                $result = $conn->query($sql);
                $resultCheck = $result->fetch_assoc();
                if ($resultCheck->num_rows > 0) {
                    header("Location: ./register.php?signup=user-taken");
                    exit();
                } else {
                    $hashedPwd = $conn->real_escape_string(password_hash($pass, PASSWORD_BCRYPT));
                    $salt = $conn->real_escape_string(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
                    $salt = $conn->real_escape_string(base64_encode($salt));
                    $salt = $conn->real_escape_string(str_replace('+', '.', $salt));
                    $UUID =  $conn->real_escape_string(rand());






                    $sql = "INSERT INTO i_users (username, email, pass, salt, UUID)
                    VALUES ('$username', '$email', '$hashedPwd', '$salt', '$UUID')";
                    $result = $conn->query($sql);
                    session_start();
                    $_SESSION["username"] = $row['username'];
                    $_SESSION["email"] = $row['email'];
                    $session    = session_id();
                    $time       = time();
                    $time_check = $time-600;     //We Have Set Time 5 Minutes
                    header("Location: ./dashboard.php?signup=@🔐success");
                    exit();

                        }
                    }
                }
            }
        } else {
    header("Location: register.php");
    exit();

}
