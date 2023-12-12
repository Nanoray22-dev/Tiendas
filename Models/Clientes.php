<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Models/Database.php';

class Clientes {
    private $conexion;

    public function __construct() {
        $database = new Database();
        $this->conexion = $database->getConn();
    }

    function all() {
        $sql = "SELECT * FROM customer";
        $stm = $this->conexion->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}