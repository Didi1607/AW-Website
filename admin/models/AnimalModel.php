<?php

class AnimalModel
{
    var $connect;

    function __construct()
    {
        $this->connect = new mysqli("localhost", "root", "", "aw");
        if ($this->connect->connect_error) {
            die("Kết nối cơ sở dữ liệu thất bại: " . $this->connect->connect_error);
        }
    }

    public function get_all_animal()
    {
        $sql = "SELECT * FROM animaldatas5 ORDER BY id DESC";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();

        if ($stmt->num_rows > 0) {
            return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        } else {
            return 0;
        }
    }
}
