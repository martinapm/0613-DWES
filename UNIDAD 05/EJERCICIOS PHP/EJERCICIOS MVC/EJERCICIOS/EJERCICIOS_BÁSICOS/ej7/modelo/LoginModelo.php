<?php
class LoginModelo {

    private $usuarioValido = 'admin';
    private $passwordValido = '1234';

    public function validarCredenciales($datos) {
        
        if (empty($datos['usuario'])) {
            return [
                'valido' => false,
                'error' => 'El usuario es requerido'
            ];
        }

        if (empty($datos['password'])) {
            return [
                'valido' => false,
                'error' => 'La contraseña es requerida'
            ];
        }

        $usuario = $datos['usuario'];
        $password = $datos['password'];

        if ($usuario === $this->usuarioValido && $password === $this->passwordValido) {
            return [
                'valido' => true
            ];
        } else {
            return [
                'valido' => false,
                'error' => 'Usuario o contraseña incorrectos'
            ];
        }
    }
}
?>