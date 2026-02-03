<?php
class ContactoModelo {

    public function validarDatos($datos) {
        $errores = [];

        if (empty($datos['nombre'])) {
            $errores[] = "El nombre es requerido";
        }

        if (empty($datos['email']) || !filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
            $errores[] = "El email es inválido";
        }

        if (empty($datos['mensaje'])) {
            $errores[] = "El mensaje es requerido";
        }

        return [
            'valido' => empty($errores),
            'errores' => $errores
        ];
    }
}
?>