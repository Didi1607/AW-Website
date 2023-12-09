<?php

class LoginModel
{
    var $conn;

    public function __construct()
    {
        $this->conn = new MySQLi("localhost", "root", "", "aw");
    }
    public function getUserName($username)
{
    $stmt = $this->conn->prepare("SELECT * FROM user WHERE LOWER(username) = LOWER(?) AND (role = 2 OR role = 3)");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
    public function login($username, $password)
    {
        if (empty($username)) {
            return "Username cannot be blank";
        } elseif (empty($password)) {
            return "Password can not be blank";
        } else {
            $user = $this->getUserName($username);

            if ($user) {
                $user_password = $user['password'];

                $password_md5 = md5($password);

                if ($password_md5 === $user_password) {
                    session_start();
                    $_SESSION['admin'] = true;
                    return "success";
                } else {
                    return "User account or password incorrect";
                }
            } else {
                return "Wrong account or not an admin account!!";
            }
        }
    }
}
