<?php
require_once 'modelo/TareaModelo.php';

class TareaControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new TareaModelo();
    }

    public function mostrarTareas() {
        $tareas = $this->modelo->obtenerTareas();
        require 'vista/TareasVista.php';
    }
}
?>