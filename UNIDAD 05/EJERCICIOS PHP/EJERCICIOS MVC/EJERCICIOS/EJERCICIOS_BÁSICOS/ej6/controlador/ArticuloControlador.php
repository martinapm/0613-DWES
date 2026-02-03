<?php
require_once 'modelo/ArticuloModelo.php';

class ArticuloControlador {

    private $modelo;

    public function __construct() {
        $this->modelo = new ArticuloModelo();
    }

    public function mostrarTodos() {
        $articulos = $this->modelo->obtenerArticulos();
        $categorias = $this->modelo->obtenerCategorias();
        require 'vista/ArticulosVista.php';
    }

    public function mostrarPorCategoria($categoria) {
        $articulos = $this->modelo->filtrarPorCategoria($categoria);
        $categorias = $this->modelo->obtenerCategorias();
        require 'vista/ArticulosVista.php';
    }
}
?>