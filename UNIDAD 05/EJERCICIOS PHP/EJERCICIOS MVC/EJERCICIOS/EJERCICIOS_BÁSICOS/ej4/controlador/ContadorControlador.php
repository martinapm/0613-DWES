<?php
require_once 'modelo/ContadorModelo.php';

class ContadorControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new ContadorModelo();
    }

    public function incrementarVisita() {
        $this->modelo->incrementar();
        $visitas = $this->modelo->obtenerVisitas();
        require 'vista/ContadorVista.php';
    }
}
?>