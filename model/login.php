<?php

class Login_Model {
        private $conn;

        public function __construct($conn) {
                $this->conn = $conn;
        }


        public function get_user_id($email) {
                $query = $this->conn->prepare("SELECT id FROM users WHERE email=?");
                $query->bind_param("s", $email);
                $query->execute();
                $query->bind_result($userID);
                if($query->fetch()) {
                        $result = $userID;
                        $query->close();
                        return $result;
                } else {
                        $query->close();
                        return -1;
                }
        }

        public function login($username, $password) {
            $query = $this->conn->prepare("SELECT id,password FROM users WHERE username=?");
            $query->bind_param("s", $username);
            $query->execute();
            $query->bind_result($userID,$storedHashedPassword);
            if($query->fetch()) {
                $query->close();
                if(password_verify($password, $storedHashedPassword) !== false) {
                        return $userID;
                } else {
                        return false;
                }
            } else {
                    $query->close();
                    return false;
            }
        }
}

?>
