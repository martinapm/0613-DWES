<?php
require_once 'modelo/ProductoModelo.php';

class ProductoControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new ProductoModelo();
    }

    public function listarProductos() {
        $productos = $this->modelo->getProductos();
        require 'vista/productos.php';
    }

    public function añadirProducto($nombre, $precio) {
        $this->modelo->añadirProducto($nombre, $precio);
        $this->listarProductos();
    }
}
?>
