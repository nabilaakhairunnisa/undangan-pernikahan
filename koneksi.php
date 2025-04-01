<?php
class db {

    private $koneksi;

    function __construct() {
        $this->koneksi = $koneksi = new mysqli("localhost", "root", "", "dbname");
    }

    function addWhises($name, $message) {
        return $this->koneksi->query("INSERT INTO wishes (name, message) 
        VALUES ('$name', '$message')");
    }

    function getWishes() {
        $sql = "SELECT name, message, created_at FROM wishes ORDER BY created_at DESC";
        $result = $this->koneksi->query($sql);
        return $result;
    }
}
?>