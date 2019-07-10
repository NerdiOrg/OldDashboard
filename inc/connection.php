<?php
$conn = new mysqli('localhost', 'USERNAME', 'PASSWORD', 'DATABASE');
//Check Connection
if (mysqli_connect_errno()) {
        error_log("Connection failed");
        error_log(mysqli_connect_error());
        exit();
}
?>
