<?php
session_start();
function log_user_in($id) {
        $_SESSION['login_user_id'] = $id;
}
function is_user_logged_in() {
        return ($_SESSION['login_user_id'] != null);
}

function get_user_id() {
        return $_SESSION['login_user_id'];
}

function logout_user($id) {
        session_destroy();
}

function is_user_admin_check() {
    global $conn;
        if(is_user_logged_in()) {
                $id = $_SESSION['login_user_id'];
                $query = $conn->prepare("SELECT role FROM users WHERE id=?");
                $query->bind_param("i", $id);
                $query->execute();
                $query->bind_result($role);
                if($query->fetch()) {
                        $result = ($role == 0);
                        $query->close();
                        return $result;
                } else {
                        $query->close();
                        return false;
                }
        } else { return false; }
}
?>
