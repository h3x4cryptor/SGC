<?php
include "dbconnect.php";

//**Register new employee. */
    if(isset($_POST['request'])) {
            $pass = $_POST['pwd'];
            $hashedPwd = password_hash($pass, PASSWORD_BCRYPT);
            $salt = MD5($hashedPwd);
            $sql = "SELECT * FROM salesmen WHERE salemanid = '$salemanid'"; 
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $email_error = "Sorry... email already taken"; 	
            } else {
            $sql="INSERT INTO salesmen (salemanname, salemanid, dep, jtitle, email, phonenumber, hashedPwd, salt) VALUES ('$_POST[salemanname]','$_POST[salemanid]','$_POST[dep]','$_POST[jtitle]','$_POST[email]','$_POST[phonenumber]','$hashedPwd','$salt')";
            if ($conn->query($sql) === TRUE) {
                header("Location: success.php");
            } 
        }
    }
//**Product creation. */
    if(isset($_POST['createproduct'])) {
            $sql="INSERT INTO products (materialnumber, productname, producttype, price, sku) VALUES ('$_POST[materialnumber]','$_POST[productname]','$_POST[producttype]','$_POST[price]','$_POST[sku]')";
            if ($conn->query($sql) === TRUE) {
                header("Location: products.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

//**Login check and redirect to timeline. */
        if(isset($_POST['login'])) {

            $salemanid =  $conn->real_escape_string($_POST['salemanid']);
            $pwd =  $conn->real_escape_string($_POST['pwd']);
            if (empty($salemanid) || empty($pwd)) {
                header("Location: ./404.php?login=empty");
                $msg = "error..!";
                exit();
            } else {
                $sql = "SELECT * FROM salesmen WHERE salemanid = '$salemanid'"; 
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck < 1)  {       
                    header("Location: ./404.php?login=error1");
                    exit();
                } else {
                    if ($row = mysqli_fetch_assoc($result)) {
                        $hashedPwdCheck = password_verify($pwd, $row['hashedPwd']);
                        if ($hashedPwdCheck == false) {
                        header("Location: ./404.php?login=error2");
                        exit();
                    } elseif ($hashedPwdCheck == true) {
                        session_start();
                        $_SESSION["salemanid"] = $row['salemanid'];
                        $_SESSION["salemanname"] = $row['salemanname'];
                        $_SESSION["email"] = $row['email'];
                        $_SESSION["phonenumber"] = $row['phonenumber'];
                        $_SESSION["photo"] = $row['photo'];
                        $logged_in = 1;   
                        $session    = session_id();
                        $time       = time();
                        $time_check = $time-600;     //We Have Set Time 5 Minutes
                        header("Location: ./timeline.php?login=🔐success");
                        exit();                
                   }
                }
            }
        }
    }
$conn->close();







?>