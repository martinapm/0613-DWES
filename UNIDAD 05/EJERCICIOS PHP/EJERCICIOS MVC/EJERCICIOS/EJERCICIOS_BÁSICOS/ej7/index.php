<?php
require_once 'controlador/LoginControlador.php';

$controlador = new LoginControlador();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controlador->verificarLogin($_POST);
} else {
    $controlador->mostrarFormulario();
}
?>