
<?php


if(isset($_POST['add-saleman-button'])) {

    $dserver = "localhost";
    $duser = "root";
    $dpassword = "Qcard420";
    $dbname = "SGDB";
    // Create connection
    $conn = new mysqli($dserver, $duser, $dpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $salemanname = $conn->real_escape_string($_POST['salemanname']);
    $salemanid = $conn->real_escape_string($_POST['salemanid']);
    $dep = $conn->real_escape_string($_POST['dep']);
    $jtitle = $conn->real_escape_string($_POST['jtitle']);
    $email = $conn->real_escape_string($_POST['email']);
    $phonenumber = $conn->real_escape_string($_POST['phonenumber']);
    $pass = $conn->real_escape_string($_POST['pass']);
    $cpass = $conn->real_escape_string($_POST['cpass']);
    $id = $conn->real_escape_string($_POST['salemanid']);
    
   //Error handling
    if (empty($salemanname) || empty($salemanid) ||  empty($email) || empty($pass) || empty($cpass)) {
        header("Location: ../inc/404.php?add-saleman=empty");
        $msg = "error..!";
        exit();
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $salemanname)) {
            header("Location: ../inc/404.php?add-saleman=invalid");
            $Message1 = "Invalid-entries-please-try-again. ";
            header("Location:../inc/404.php?error={$Message1}");
            exit();
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../inc/404.php?add-saleman=email-err");
                exit();
            } else {
                $sql = "SELECT * FROM salesmen WHERE salemanid='$salemanid'";
                $result = $conn->query($sql);
                $resultCheck = $result->fetch_assoc();
                if ($resultCheck->num_rows > 0) {
                    header("Location: ../inc/404.php?add-saleman=already-exist");
                    exit();
                } else {
                    
                    $hashedPwd = $conn->real_escape_string(password_hash($pass, PASSWORD_BCRYPT));
                    $salt = $conn->real_escape_string(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM));
                    $salt = $conn->real_escape_string(base64_encode($salt));
                    $salt = $conn->real_escape_string(str_replace('+', '.', $salt));

                    $sql = "INSERT INTO `salesmen` (`id`, `salemanname`, `salemanid`, `dep`, `jtitle`, `email`, `phonenumber`, `pass`, `salt`)
                    VALUES (`$id`, `$salemanname`, `$salemanid`, `$dep`, `$jtitle`, `$email`, `$phonenumber`, `$hashedPwd`, `$salt`)";
                    $result = $conn->query($sql);
                    session_start();
                    $_SESSION["salemanname"] = $row['salemanname'];
                    $_SESSION["salemanid"] = $row['salemanid'];
                    $_SESSION["dep"] = $row['dep'];
                    $_SESSION["jtitle"] = $row['jtitle'];
                    $_SESSION["email"] = $row['email'];
                    $_SESSION["phonenumber"] = $row['phonenumber'];
                    $session    = session_id();
                    $time       = time();
                    $time_check = $time-600;     //We Have Set Time 5 Minutes
                    $Message = "A new salman got inserted into database successfully. ";
                    header("Location:./index.php?Message={$Message}");
                    exit();

                        }
                    }
                }
            }
        } else {
    header("Location: ../inc/404.php?unknown-error-404");
    exit();

}
