<?php 
include_once 'inc/connection.php';
include_once 'model/session_utils.php';
?>
<html>
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
        <br><br>
        <div style="width:50%;text-align:center;left:25%;position:relative;">
                <h1>Create a new account</h1>
                <form action="controller/create_user.php" method="post">
                        <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" maxlength="255">
                        </div>
                        <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" maxlength="255">
                        </div>
                        <?php if(is_user_admin_check()){ ?>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" class="form-control" id="role">
                                <option value="1">Regular User</option>
                                <option value="0">Administrator</option>
                            </select>
                        </div>
                        <?php } ?>
                        <input type="submit" class="form-control" value="Submit" />
                </form>
        </div>
</body>
</html>
