<?php
class UsuarioModelo {

    private $usuarios;

    public function __construct() {

        $this->usuarios = [
            1 => ["id" => 1, "nombre" => "Martina", "email" => "martina@gmail.com"],
            2 => ["id" => 2, "nombre" => "Samuel", "email" => "samuel@gmail.com"],
            3 => ["id" => 3, "nombre" => "Rafael", "email" => "rafael@gmail.com"]

        ];
    }

    public function getUsuario($id) {
        return $this->usuarios[$id];
    }
}
?>
