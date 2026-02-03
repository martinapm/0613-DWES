<?php
require_once 'modelo/AlumnoModelo.php';

class AlumnoControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new AlumnoModelo();
    }

    public function mostrarAlumnos() {
        $alumnos = $this->modelo->obtenerAlumnos();
        require 'vista/AlumnoVista.php';
    }

    public function insertarAlumno($datos) {
        $resultado = $this->modelo->insertarAlumno($datos);
        
        if ($resultado['exito']) {
            $mensaje = $resultado['mensaje'];
            $exito = true;
        } else {
            $error = $resultado['mensaje'];
        }

        require 'vista/AlumnoVista.php';
    }
}
?>