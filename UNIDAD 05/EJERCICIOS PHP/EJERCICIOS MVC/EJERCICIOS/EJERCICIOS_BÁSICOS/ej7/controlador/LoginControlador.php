<?php
require_once 'modelo/LoginModelo.php';

class LoginControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new LoginModelo();
    }

    public function mostrarFormulario() {
        require 'vista/LoginVista.php';
    }

    public function verificarLogin($datos) {
        $resultado = $this->modelo->validarCredenciales($datos);

        if ($resultado['valido']) {
            $mensaje = "¡Login exitoso!";
            $exito = true;
            require 'vista/LoginVista.php';
        } else {
            $error = $resultado['error'];
            require 'vista/LoginVista.php';
        }
    }
}
?>