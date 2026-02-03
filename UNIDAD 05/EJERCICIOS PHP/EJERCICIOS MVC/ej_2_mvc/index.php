<?php
require_once 'controlador/ProductoControlador.php';

$controlador = new ProductoControlador();

$action = $_GET['action'] ?? 'list';

switch ($action) {

    case 'add':
        $nombre = $_POST['nombre'] ?? '';
        $precio = $_POST['precio'] ?? 0;

        if (!empty($nombre) && $precio > 0) {
            $controlador->añadirProducto($nombre, $precio);
        }
        break;

    default:
        $controlador->listarProductos();
        break;
}
