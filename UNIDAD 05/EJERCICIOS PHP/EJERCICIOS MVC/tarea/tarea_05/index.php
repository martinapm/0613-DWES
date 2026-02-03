<?php
define('CON_CONTROLADOR', true);

require_once 'modelo/modelo.php';
require_once 'controlador/controlador.php';

$accion = isset($_GET['accion']) ? $_GET['accion'] : 'tienda';

if ($accion === 'tienda') {
    $controlador = new Controlador();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $articulo = $controlador->detalle($id);
        $vista = $articulo ? 'detalle' : 'error';
    } else {
        $articulos = $controlador->listar();
        $vista = 'listado';
    }
} elseif ($accion === 'sugerencias') {
    $controladorSugerencias = new ControladorSugerencias();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controladorSugerencias->guardarSugerencia($_POST);
    }
    $sugerencias = $controladorSugerencias->obtenerSugerencias();
    $vista = 'sugerencias';
} elseif ($accion === 'registro') {
    $controladorRegistro = new ControladorRegistro();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controladorRegistro->guardarUsuario($_POST);
    }
    $vista = 'registro';
}

require_once 'vistas/vistas.php';
?>
