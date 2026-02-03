<?php
require_once 'modelo/ContadorModelo.php';

class ContadorControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new ContadorModelo();
    }

    public function mostrarContador() {
        $visitas = $this->modelo->incrementarVisitas();
        
        if ($visitas !== false) {
            $totalVisitas = $visitas;
            $error = false;
        } else {
            $error = true;
            $mensajeError = 'Error al procesar el contador de visitas.';
        }

        require 'vista/ContadorVista.php';
    }
}
?>