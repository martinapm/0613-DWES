<?php
require_once 'modelo/UsuarioModelo.php';

class UsuarioControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new UsuarioModelo();
    }

    public function mostrarUsuario($id) {

        $usuario = $this->modelo->getUsuario($id);

        if ($usuario) {
            require 'vista/UsuarioVista.php';
        } else {
            echo "Usuario no encontrado";
        }
    }
}
?>
