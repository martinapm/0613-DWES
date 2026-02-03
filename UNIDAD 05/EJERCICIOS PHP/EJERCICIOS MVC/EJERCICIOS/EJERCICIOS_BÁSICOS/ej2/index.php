<?php
require_once 'controlador/UsuarioControlador.php';

$controlador = new UsuarioControlador();
$controlador->mostrarUsuario(1);
$controlador->mostrarUsuario(2);
$controlador->mostrarUsuario(3);
?>
