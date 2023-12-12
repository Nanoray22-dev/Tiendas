<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Models/Clientes.php';
class ClientesController {
    function index(){
        $cliente = new Clientes;
        $clientes = $cliente-> all();
        return $clientes;
    }
}

$a = new ClientesController;
$a -> index();