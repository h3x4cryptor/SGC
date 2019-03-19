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
                $sql = "SELECT username FROM i_users WHERE username='$username'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck->num_rows > 0) {
                    header("Location: ./register.php?signup=user-taken");
                    exit();
                } else {
                    $hashedPwd = $conn->real_escape_string(password_hash($pass, PASSWORD_BCRYPT));
                    $salt = $conn->real_escape_string(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
                    $salt = $conn->real_escape_string(base64_encode($salt));
                    $salt = $conn->real_escape_string(str_replace('+', '.', $salt));
                    $sql = "INSERT INTO i_users (username, email, pass, salt)
                    VALUES ('$username', '$email', '$hashedPwd', '$salt')";
                    $result = $conn->query($sql);
                    session_start();
                    $_SESSION["username"] = $row['username'];
                    $_SESSION["email"] = $row['email'];
                    header("Location: ./dashboard.php?signup=@🔐success");
                    exit();

                        }
                    }
                }
            }
        } else {












session_start();
if(isset($_POST['loginbutton'])) {
    include 'db.php';
    $username =  $conn->real_escape_string($_POST['username']);
    $pass =  $conn->real_escape_string($_POST['pass']);
    $email =  $conn->real_escape_string($_POST['email']);
    $status =  $conn->real_escape_string($_POST['status']);
    if (empty($username) || empty($pass)) {
        header("Location: ./login.php?login=empty");
        $msg = "error..!";
        exit();
    } else {
        $sql = "SELECT * FROM i_users WHERE username = '$username' OR email='$email'"; 
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1)  {       
            header("Location: ./login.php?login=invalid");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                $hashedPwdCheck = password_verify($pass, $row['pass']);
                if ($hashedPwdCheck == false) {
                header("Location: ./login.php?login=error");
                exit();
            } elseif ($hashedPwdCheck == true) {
                session_start();
                $_SESSION["username"] = $row['username'];
                $_SESSION["email"] = $row['email'];
                $_SESSION["status"] = $row['status'];
                $_SESSION["joined"] = $row['joined'];
                $_SESSION['picture'] = $row['picture'];
                $_SESSION['UUID'] = $row['UUID'];
                $logged_in = 1;

                $session    = session_id();
                $time       = time();
                $time_check = $time-600;     //We Have Set Time 5 Minutes
                header("Location: ./forms.php?login=🔐success");
                exit();                
           }
        }
    }
}
} else {
    if(isset($_POST['loansbutton'])) {
        include 'db.php';
        session_start();
        $w_name =  $conn->real_escape_string($_POST['w_name']);
        $w_pin =  $conn->real_escape_string($_POST['w_pin']);
        $w_pinc =  $conn->real_escape_string($_POST['w_pinc']);
        $f_loant =  $conn->real_escape_string($_POST['f_loant']);
        $flo_name =  $conn->real_escape_string($_POST['flo_name']);
        $flot_amount =  $conn->real_escape_string($_POST['flot_amount']);
        $flomi_amount =  $conn->real_escape_string($_POST['flomi_amount']);
        $flo_period =  $conn->real_escape_string($_POST['flo_period']);
        $hashedPIN = $conn->real_escape_string(password_hash($w_pin, PASSWORD_BCRYPT));
        $w_salt = $conn->real_escape_string(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
        $w_salt = $conn->real_escape_string(base64_encode($w_salt));
        $w_salt = $conn->real_escape_string(str_replace('+', '.', $w_salt));
        $sql = "INSERT INTO i_finance (walletname, wallettype, walletpin, w_salt, username)
        VALUES ('$w_name', '{$_SESSION['f_loant']}', '$hashedPIN', '$w_salt', '{$_SESSION['username']}')";
        $result = $conn->query($sql);
        $sql = "INSERT INTO f_loan (username, flo_name, flot_amount, flomi_amount, flo_period)
        VALUES ('{$_SESSION['username']}', '$flo_name', '$flot_amount', '$flomi_amount', '$flo_period')";
        $result = $conn->query($sql);
        
        session_start();
        $_SESSION["w_name"] = $row['w_name'];
        $_SESSION["f_loant"] = $row['f_loant'];

        header("Location: ./forms.php?walletcreated=@🔐success");
        exit();


    }
}







}


