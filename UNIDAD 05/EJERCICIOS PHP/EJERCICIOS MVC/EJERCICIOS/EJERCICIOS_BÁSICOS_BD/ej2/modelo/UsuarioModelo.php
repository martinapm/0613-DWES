<?php
require_once 'db/conexion.php';

class UsuarioModelo {

    private $conexion;
    private $tabla = 'usuario';

    public function __construct() {
        $db = new conexion();
        $this->conexion = $db->conectar();
    }

    public function obtenerUsuarioPorId($id) {
        
        if (!is_numeric($id) || $id <= 0) {
            return null;
        }

        $sql = "SELECT id, nombre, email FROM " . $this->tabla . " WHERE id = ?";
        $resultado = $this->conexion->prepare($sql);
        
        if (!$resultado) {
            die("Error en la consulta preparada: " . $this->conexion->error);
        }
        
        $resultado->bind_param("i", $id);
        $resultado->execute();
        $resultado = $resultado->get_result();

        if ($resultado->num_rows > 0) {
            return $resultado->fetch_assoc();
        } else {
            return null;
        }
    }
}
?>