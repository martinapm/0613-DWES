<?php
require_once 'modelo/TemperaturaModelo.php';

class TemperaturaControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new TemperaturaModelo();
    }

    public function mostrarFormulario() {
        require 'vista/TemperaturaVista.php';
    }

    public function convertir($datos) {
        
        if (empty($datos['celsius']) || !is_numeric($datos['celsius'])) {
            $error = "Por favor ingresa un número válido";
            require 'vista/TemperaturaVista.php';
            return;
        }

        $celsius = (float)$datos['celsius'];
        $fahrenheit = $this->modelo->celsiusAFahrenheit($celsius);
        
        require 'vista/TemperaturaVista.php';
    }
}
?>