<?php
require_once 'controlador/TemperaturaControlador.php';

$controlador = new TemperaturaControlador();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $controlador->convertir($_POST);
} else {
    $controlador->mostrarFormulario();
}
?>