<?php
require_once 'modelo/UsuarioModelo.php';

class UsuarioControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new UsuarioModelo();
    }

    public function mostrarUsuario($id) {
        $usuario = $this->modelo->obtenerUsuarioPorId($id);
        
        if ($usuario) {
            $datos = $usuario;
            $encontrado = true;
        } else {
            $error = "El usuario con ID " . htmlspecialchars($id) . " no existe.";
            $encontrado = false;
        }

        require 'vista/UsuarioVista.php';
    }
}
?>