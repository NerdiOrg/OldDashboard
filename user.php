<?php
require_once "inc/connection.php";
require_once "model/session_utils.php";
if(!is_user_logged_in()) {
        header("Location: login.php");
}
include 'inc/header.php';
?>
<html>
    <body>
        <div class="container">
            <h2>User Dashboard</h2>
            <p>Content goes here</p>
        </div>
    </body>
</html>
