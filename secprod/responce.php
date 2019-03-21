<?php
$servername = "localhost";
$dbuser = "root";
$dbpass = "Qcard420";
$dbname = "sgdb0";

// Create connection
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    if(isset($_POST['request'])) {
            $pass = $_POST['pwd'];
            $hashedPwd = password_hash($pass, PASSWORD_BCRYPT);
            $salt = MD5($hashedPwd);
            $sql="INSERT INTO salesmen (salemanname, salemanid, dep, jtitle, email, phonenumber, hashedPwd, salt) VALUES ('$_POST[salemanname]','$_POST[salemanid]','$_POST[dep]','$_POST[jtitle]','$_POST[email]','$_POST[phonenumber]','$hashedPwd','$salt')";
            if ($conn->query($sql) === TRUE) {
                header("Location: success.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }

    if(isset($_POST['createproduct'])) {
            $sql="INSERT INTO products (materialnumber, productname, producttype, chk, qty, free, price, sku) VALUES ('$_POST[materialnumber]','$_POST[productname]','$_POST[producttype]','$_POST[chk]','$_POST[qty]','$_POST[free]','$_POST[price]','$_POST[sku]')";
            if ($conn->query($sql) === TRUE) {
                header("Location: products.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }


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
                        $_SESSION["[phonenumber]"] = $row['phonenumber'];
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