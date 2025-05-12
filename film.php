<?php
require_once 'config.php';

class Film {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAllFilms() {
        $sql = "SELECT * FROM film";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>
