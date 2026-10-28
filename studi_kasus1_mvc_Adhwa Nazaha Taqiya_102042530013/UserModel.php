<?php

class UserModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli(
            "localhost",
            "root",
            "",
            "login_mvc"
        );

        if ($this->conn->connect_error) {
            die("Koneksi database gagal: " . $this->conn->connect_error);
        }

        $this->conn->set_charset("utf8mb4");
    }

    public function cekLogin($username, $password)
    {
        $sql = "SELECT id, username FROM users
                WHERE username = ? AND password = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();

        $result = $stmt->get_result();
        $berhasil = $result->num_rows > 0;

        $stmt->close();

        return $berhasil;
    }
}
