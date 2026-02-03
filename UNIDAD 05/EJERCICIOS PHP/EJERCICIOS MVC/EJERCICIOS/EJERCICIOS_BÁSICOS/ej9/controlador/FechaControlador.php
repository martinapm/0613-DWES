<?php
require_once 'modelo/FechaModelo.php';

class FechaControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new FechaModelo();
    }

    public function mostrarFechaHora() {
        $fechaFormato = $this->modelo->obtenerFechaFormato();
        $hora = $this->modelo->obtenerHora();
        $fechaCompleta = $this->modelo->obtenerFechaCompleta();
        require 'vista/FechaVista.php';
    }
}
?>