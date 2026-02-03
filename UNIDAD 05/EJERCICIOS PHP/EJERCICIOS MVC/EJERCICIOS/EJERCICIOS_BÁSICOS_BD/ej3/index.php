<?php
require_once 'controlador/ContactoControlador.php';

$controlador = new ContactoControlador();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controlador->procesarFormulario($_POST);
} else {

    $controlador->mostrarFormulario();
}
?>