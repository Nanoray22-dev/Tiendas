<?php

namespace Models;

use Models\Database;

// require_once $_SERVER['DOCUMENT_ROOT'] . '/Models/Database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/Vendor/autoload.php';

class Cliente
{
    private $conexion;

    public function __construct()
    {
        $database = new Database;
        $this->conexion = $database->getConn();
    }

    public function all()
    {
        $sql = "SELECT * FROM clientes";
        try {
            $stm = $this->conexion->prepare($sql);
            $stm->execute();
            return $stm->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo "Error: ".$e->getMessage();
        }
    }
}

$cliente = new Cliente;
print_r($cliente -> all());