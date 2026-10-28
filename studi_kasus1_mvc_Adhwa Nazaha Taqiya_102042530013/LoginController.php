<?php

require_once 'UserModel.php';

class LoginController
{
    public function login()
    {
        $error = "";

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"] ?? "";
            $password = $_POST["password"] ?? "";

            $user = new UserModel();

            if ($user->cekLogin($username, $password)) {
                header("Location: index.php?page=dashboard");
                exit;
            } else {
                $error = "Username atau password salah!";
            }
        }

        require 'login.php';
    }
}
