<?php

class Create_User_Model {
        private $conn;

        public function __construct($conn) {
                $this->conn = $conn;
        }


        public function create_user($email, $username, $password, $role) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $query = $this->conn->prepare("INSERT INTO users (username, email, password, role) VALUES (?,?,?,?);");
                $query->bind_param("sssi", $username, $email, $hashed_password,$role);
                $query->execute();
                $result = ($query->affected_rows == 1);
                $query->close();
                return $result;
        }

}
?>
