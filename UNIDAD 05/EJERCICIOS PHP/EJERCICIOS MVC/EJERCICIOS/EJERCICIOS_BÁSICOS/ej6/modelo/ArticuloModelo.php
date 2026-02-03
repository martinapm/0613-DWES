<?php
class ArticuloModelo {

    private $articulos;

    public function __construct() {
        $this->articulos = [
            ['id' => 1, 'titulo' => 'Los mejores equipos de fútbol', 'categoria' => 'Deporte', 'contenido' => 'Análisis de los equipos más destacados.'],
            ['id' => 2, 'titulo' => 'iPhone 16 Pro Review', 'categoria' => 'Tecnología', 'contenido' => 'Opinión sobre el nuevo modelo de Apple.'],
            ['id' => 3, 'titulo' => 'Tendencias en moda 2024', 'categoria' => 'Moda', 'contenido' => 'Descubre las tendencias de este año.'],
            ['id' => 4, 'titulo' => 'Inteligencia Artificial avanzada', 'categoria' => 'Tecnología', 'contenido' => 'Nuevos avances en IA y machine learning.'],
            ['id' => 5, 'titulo' => 'Roland Garros 2024', 'categoria' => 'Deporte', 'contenido' => 'Resultados del torneo de tenis.'],
            ['id' => 6, 'titulo' => 'Zapatos deportivos de marca', 'categoria' => 'Moda', 'contenido' => 'Conoce los mejores zapatos del mercado.']
        ];
    }

    public function obtenerArticulos() {
        return $this->articulos;
    }

    public function obtenerCategorias() {
        $categorias = [];
        foreach ($this->articulos as $articulo) {
            if (!in_array($articulo['categoria'], $categorias)) {
                $categorias[] = $articulo['categoria'];
            }
        }
        sort($categorias);
        return $categorias;
    }

    public function filtrarPorCategoria($categoria) {
        $filtrados = [];
        foreach ($this->articulos as $articulo) {
            if ($articulo['categoria'] === $categoria) {
                $filtrados[] = $articulo;
            }
        }
        return $filtrados;
    }
}
?>