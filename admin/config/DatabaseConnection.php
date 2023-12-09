<?php
class DatabaseConnection
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        // Tạo kết nối đến cơ sở dữ liệu
        $this->connection = new MySQLi($this->host, $this->username, $this->password, $this->database);

        // Kiểm tra kết nối
        if ($this->connection->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $this->connection->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
