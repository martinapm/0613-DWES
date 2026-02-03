<?php
require_once 'controlador/UsuarioControlador.php';

$controlador = new UsuarioControlador();

// Obtener el ID del usuario desde la URL, si no existe usar ID 1 por defecto
$id = isset($_GET['id']) ? $_GET['id'] : 1;

$controlador->mostrarUsuario($id);
?>