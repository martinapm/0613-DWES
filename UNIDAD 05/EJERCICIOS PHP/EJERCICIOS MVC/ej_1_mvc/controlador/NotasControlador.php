<?php
require_once 'modelo/NotaModelo.php';
class NotasControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new NotaModelo();
    }

    public function listaNotas() {
        $notas = $this->modelo->getNotas();
        require 'views/Notas.php';
    }

    public function addNotas($contenido) {
        $this->modelo->addNota($contenido);
        $this->listaNotas();
    }

    public function deleteNotas($id) {
        $this->modelo->deleteNota($id);
        $this->listaNotas();
    }
}
?>
