<?php
class TareaModelo {

    private $tareas;

    public function __construct() {
        $this->tareas = [
            ['id' => 1, 'titulo' => 'Comprar leche', 'estado' => 'hecha'],
            ['id' => 2, 'titulo' => 'Hacer la cama', 'estado' => 'pendiente'],
            ['id' => 3, 'titulo' => 'Estudiar PHP', 'estado' => 'hecha'],
            ['id' => 4, 'titulo' => 'Limpiar el escritorio', 'estado' => 'pendiente'],
            ['id' => 5, 'titulo' => 'Llamar al cliente', 'estado' => 'hecha']
        ];
    }

    public function obtenerTareas() {
        return $this->tareas;
    }
}
?>