<?php
require_once 'controlador/NotasControlador.php';

$controlador = new NotasControlador();

$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'add';
        $contentido = $_POST['contentido'] ?? '';
        if(!empty($contentido)) {
            $controlador->addNota($contentido);
        }
        break;

        case 'delete':
            $id = $_GET['id'] ?? 0;
            if ($id) {
                $controlador->deleteNota($id);
            }
            break;

        default:
            $controlador->listaNotas();
            break;

}