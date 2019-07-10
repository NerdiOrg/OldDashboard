<?php
include "inc/connection.php";
include "model/session_utils.php";
if(is_user_admin_check()){
    header("Location: admin.php");
    exit("You are already logged in as Admin!");
} else if(is_user_logged_in()){
    header("Location: user.php");
    exit("You are already logged in as User!");
}
?>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
        <br><br>
        <div style="width:50%;text-align:center;left:25%;position:relative;">
                <h1>Login</h1>
                <?php
                if(isset($_GET['error'])) {
                        echo "<div class=\"alert alert-danger\">";
                        echo "<strong>Login failed</strong> Invalid email or password.";
                        echo "</div>";
                }
                ?>
                <form action="controller/login.php" method="post">
                        <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" maxlength="255">
                        </div>
                        <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" maxlength="255">
                        </div>
                        
                        <input type="submit" class="form-control" value="Submit" />
                </form>
                <a href="create_user.php">I do not have an account</a>
        </div>
</body>
</html>
