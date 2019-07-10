<?php
include '../inc/connection.php';//Connect to the databases using MySQLi OOP.
include '../model/login.php';//Include database login operations.
include '../model/session_utils.php';//Session abstraction for encapsulation benefits.
$username = $_POST['username'];
$password = $_POST['password'];
$login_model = new Login_Model($conn);
$login_result = $login_model->login($username, $password);//Stores the user ID associated with the username.
if($login_result !== false) {
        log_user_in($login_result);//Set the user as logged in the session.
        if(is_user_admin_check()) {
            header("Location: ../admin.php");
        } else {
            header("Location: ../user.php");
        }
} else {
        header("Location: ../login.php?error&id=$login_result");
        die();
}
?>
