<?php
require_once 'modelo/ContactoModelo.php';

class ContactoControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new ContactoModelo();
    }

    public function mostrarFormulario() {
        $formularioEnviado = false;
        require 'vista/ContactoVista.php';
    }

    public function procesarFormulario($datos) {

        $validacion = $this->modelo->validarDatos($datos);
        
        if ($validacion['valido']) {

            $resultado = $this->modelo->guardarContacto($datos);
            
            if ($resultado['exito']) {
                $formularioEnviado = true;
                $errores = [];
            } else {
                $formularioEnviado = false;
                $errores = [$resultado['mensaje']];
            }
        } else {

            $formularioEnviado = false;
            $errores = $validacion['errores'];
        }

        require 'vista/ContactoVista.php';
    }
}
?>