<?php
require_once 'modelo/ContactoModelo.php';

class ContactoControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new ContactoModelo();
    }

    public function mostrarFormulario() {
        require 'vista/FormularioVista.php';
    }

    public function procesarContacto($datos) {
        $resultado = $this->modelo->validarDatos($datos);

        if ($resultado['valido']) {
            require 'vista/ConfirmacionVista.php';
        } else {
            $errores = $resultado['errores'];
            require 'vista/FormularioVista.php';
        }
    }
}
?>