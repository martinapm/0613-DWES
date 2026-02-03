<?php
require_once 'db/conexion.php';

class ContactoModelo {

    private $conexion;
    private $tabla = 'contacto';

    public function __construct() {
        $db = new conexion();
        $this->conexion = $db->conectar();
    }

    public function validarDatos($datos) {
        $errores = [];


        if (empty($datos['nombre']) || trim($datos['nombre']) === '') {
            $errores[] = 'El nombre es obligatorio.';
        } elseif (strlen($datos['nombre']) < 3) {
            $errores[] = 'El nombre debe tener al menos 3 caracteres.';
        } elseif (strlen($datos['nombre']) > 100) {
            $errores[] = 'El nombre no puede exceder 100 caracteres.';
        }


        if (empty($datos['email']) || trim($datos['email']) === '') {
            $errores[] = 'El email es obligatorio.';
        } elseif (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
            $errores[] = 'El email no es válido.';
        }


        if (empty($datos['mensaje']) || trim($datos['mensaje']) === '') {
            $errores[] = 'El mensaje es obligatorio.';
        } elseif (strlen($datos['mensaje']) < 10) {
            $errores[] = 'El mensaje debe tener al menos 10 caracteres.';
        } elseif (strlen($datos['mensaje']) > 1000) {
            $errores[] = 'El mensaje no puede exceder 1000 caracteres.';
        }

        if (empty($errores)) {
            return ['valido' => true, 'errores' => []];
        } else {
            return ['valido' => false, 'errores' => $errores];
        }
    }

    public function guardarContacto($datos) {
        $nombre = $this->conexion->real_escape_string(trim($datos['nombre']));
        $email = $this->conexion->real_escape_string(trim($datos['email']));
        $mensaje = $this->conexion->real_escape_string(trim($datos['mensaje']));

        $sql = "INSERT INTO " . $this->tabla . " (nombre, email, mensaje) 
                VALUES ('$nombre', '$email', '$mensaje')";

        if ($this->conexion->query($sql) === TRUE) {
            return [
                'exito' => true,
            ];
        } else {
            return [
                'exito' => false,
                'mensaje' => 'Error al guardar el formulario: ' . $this->conexion->error
            ];
        }
    }
}
?>