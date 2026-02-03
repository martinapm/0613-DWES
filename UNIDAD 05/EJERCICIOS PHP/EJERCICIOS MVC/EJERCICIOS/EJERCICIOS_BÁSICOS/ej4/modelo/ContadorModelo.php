<?php
class ContadorModelo {

    private $archivo = 'datos/visitas.txt';

    public function obtenerVisitas() {
        if (file_exists($this->archivo)) {
            $contenido = file_get_contents($this->archivo);
            return (int)$contenido;
        } else {
            return 0;
        }
    }

    public function incrementar() {
        $visitas = $this->obtenerVisitas();
        $visitas++;
        file_put_contents($this->archivo, $visitas);
    }
}
?>