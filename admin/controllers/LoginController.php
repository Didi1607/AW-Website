<?php
include "models/LoginModel.php";

class LoginController
{
    var $model;

    public function __construct()
    {
        $this->model = new LoginModel();
    }

    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $result = $this->model->login($username, $password);

            if ($result === "success") {
                header("Location: ../admin/dashboard.php?request=home_admin");
            } else {
                header("Location: login.php?error=$result&username=$username");
            }
        }
    }
}
