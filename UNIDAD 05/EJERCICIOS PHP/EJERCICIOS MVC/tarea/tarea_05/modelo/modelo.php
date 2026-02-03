<?php

if (!defined('CON_CONTROLADOR')) {
    die('Error: No se puede acceder a este archivo directamente.');
}

/**
 * Clase Modelo
 * 
 * Gestiona el acceso a los datos de los artículos de la tienda.
 * Contiene el catálogo de productos almacenado en un array.
 */
class Modelo {
    /**
     * @var array $articulos Array asociativo que contiene todos los artículos del catálogo
     */
    private $articulos = [
        1 => [
            'id' => 1,
            'nombre' => 'Auriculares Bluetooth',
            'precio' => 49.99,
            'descripcion' => 'Auriculares inalámbricos de alta calidad con cancelación de ruido',
            'stock' => 15
        ],
        2 => [
            'id' => 2,
            'nombre' => 'Cable USB-C',
            'precio' => 12.99,
            'descripcion' => 'Cable USB-C de 2 metros, carga rápida 65W',
            'stock' => 50
        ],
        3 => [
            'id' => 3,
            'nombre' => 'Funda para móvil',
            'precio' => 19.99,
            'descripcion' => 'Funda protectora resistente a golpes y caídas',
            'stock' => 30
        ],
        4 => [
            'id' => 4,
            'nombre' => 'Batería portátil',
            'precio' => 35.50,
            'descripcion' => 'Batería 20000mAh, carga múltiples dispositivos simultáneamente',
            'stock' => 20
        ]
    ];

    /**
     * Obtiene todos los artículos del catálogo
     * 
     * @return array Array con todos los artículos disponibles
     */
    public function obtenerTodos() {
        return $this->articulos;
    }

    /**
     * Obtiene un artículo específico por su ID
     * 
     * @param int $id Identificador del artículo a buscar
     * @return array|null Array con los datos del artículo si existe, null si no existe
     */
    public function obtenerPorId($id) {
        return isset($this->articulos[$id]) ? $this->articulos[$id] : null;
    }
}
?>
