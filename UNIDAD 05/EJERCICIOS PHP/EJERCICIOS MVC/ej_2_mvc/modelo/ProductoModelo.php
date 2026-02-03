<?php

class ProductoModelo {
    private $productos = [];

    public function __construct() {
        $this->productos = [
            ['id' => 1, 'nombre' => 'Producto A', 'precio' => 100],
            ['id' => 2, 'nombre' => 'Producto B', 'precio' => 200],
            ['id' => 3, 'nombre' => 'Producto C', 'precio' => 300],
        ];
    }

    public function getProductos() {
        return $this->productos;
    }

    public function añadirProducto($nombre, $precio) {
        $id = count($this->productos) + 1;

        $this->productos[] = [
            'id'     => $id,
            'nombre' => $nombre,
            'precio' => $precio
        ];
    }
}
?>
