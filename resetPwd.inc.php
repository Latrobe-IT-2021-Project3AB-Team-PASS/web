<?php

require_once 'dbh.inc.php';

    if(isset($_POST['reset-submit'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $check_email = "SELECT * FROM Account WHERE Account_email='$email'";
        $run_sql = mysqli_query($conn, $check_email);
        header('location: newPwd.php');
        exit();
        
    }

    //if user click change password button
    if(isset($_POST['reset-pwd'])){
        $_SESSION['info'] = "";
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        $cpwd = mysqli_real_escape_string($conn, $_POST['cpwd']);
        if($pwd !== $cpwd){
            $errors['pwd'] = "Confirm password not matched!";
        }else{
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($pwd, PASSWORD_BCRYPT);
            $update_pass = "UPDATE `Account` SET Account_password = '$encpass' WHERE Account_email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                header('Location: logIn.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }
?>
