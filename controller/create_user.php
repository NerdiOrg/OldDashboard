<?php
include '../inc/connection.php';
include '../model/create_user.php';
include '../model/session_utils.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
if(is_user_admin_check() && isset($_POST['role'])){
    $role = $_POST['role'];
} else {
    $role = 1; // regular user 
}
$create_model = new Create_User_Model($conn);
$create_result = $create_model->create_user($email, $username, $password, $role);
if($create_result && !is_user_admin_check()){
        $userID = $conn->insert_id;
        log_user_in($userID);
        header("Location: ../user.php");
} else if(!$create_result && !is_user_admin_check()){
        $query->close();
        header("Location: ../create_user.php?error");
} else if(is_user_admin_check()){
    header("Location: ../admin.php");
}
?>
