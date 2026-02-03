<?php
require_once 'controlador/ArticuloControlador.php';

$controlador = new ArticuloControlador();

if (isset($_GET['categoria'])) {
    $controlador->mostrarPorCategoria($_GET['categoria']);
} else {
    $controlador->mostrarTodos();
}
?>