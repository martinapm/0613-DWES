<?php
class NotaModelo {
    private $notas = [];

    public function __construct() {
        $this->notas = [
            ['id' => 1, 'contenido' => 'Estudiar para el examen'],
            ['id' => 2, 'contenido' => 'Llamar al médico']
        ];
    }

    public function getNotas() {
        return $this->notas;
    }

    public function addNota($contenido){
        $id = count($this->notas)+1;
        $this->notas[] = ['id' => $id, 'contenido' => $contenido];
    }

    public function deleteNota($id){
        $this->notas = array_filter($this->notas, function($notas)
        use ($id) {
            return $notas['id'] !=$id;
        });
    }

}
?>