<?php
include_once('inc/connection.php');
include_once('model/session_utils.php');
if(is_user_logged_in() == false) { // not logged in:
        header("Location: login.php");
} else if(is_user_admin_check() == false) { // regular user:
        header("Location: user.php");
} else { // user is admin: 
        include('inc/header.php');
        include('create_user.php');
        include('controller/userlist.php');
}
?>
