<?php
require_once 'db/conexion.php';

class ContadorModelo {

    private $conexion;
    private $tabla = 'contador';

    public function __construct() {
        $db = new conexion();
        $this->conexion = $db->conectar();
    }

    public function obtenerVisitas() {
        try {
            $sql = "SELECT total FROM " . $this->tabla . " WHERE id = 1";
            $resultado = $this->conexion->query($sql);

            if ($resultado && $resultado->num_rows > 0) {
                $fila = $resultado->fetch_assoc();
                return (int)$fila['total'];
            } else {
                return 0;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function incrementarVisitas() {
        try {
            // Obtener el número actual de visitas
            $visitasActuales = $this->obtenerVisitas();
            
            if ($visitasActuales === false) {
                return false;
            }

            // Incrementar en 1
            $nuevasVisitas = $visitasActuales + 1;

            // Actualizar el valor en la BD
            $sql = "UPDATE " . $this->tabla . " SET total = " . $nuevasVisitas . " WHERE id = 1";

            if ($this->conexion->query($sql) === TRUE) {
                return $nuevasVisitas;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}
?>