<?php
require_once 'db/conexion.php';

class AlumnoModelo {

    private $conexion;
    private $tabla = 'alumno';

    public function __construct() {
        $db = new conexion();
        $this->conexion = $db->conectar();
    }

    public function obtenerAlumnos() {
        $sql = "SELECT nombre, apellido, curso FROM " . $this->tabla;
        $resultado = $this->conexion->prepare($sql);
        $resultado->execute();
        $resultado = $resultado->get_result();

        $alumnos = [];
        
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $alumnos[] = $fila;
            }
        }

        return $alumnos;
    }

    public function insertarAlumno($datos) {
        
        if (empty($datos['nombre']) || empty($datos['apellido']) || empty($datos['curso'])) {
            return [
                'exito' => false,
                'mensaje' => 'Todos los campos son requeridos'
            ];
        }

        $nombre = $this->conexion->real_escape_string($datos['nombre']);
        $apellido = $this->conexion->real_escape_string($datos['apellido']);
        $curso = $this->conexion->real_escape_string($datos['curso']);

        $sql = "INSERT INTO " . $this->tabla . " (nombre, apellido, curso) VALUES ('$nombre', '$apellido', '$curso')";

        if ($this->conexion->query($sql) === TRUE) {
            return [
                'exito' => true,
                'mensaje' => 'Alumno agregado correctamente'
            ];
        } else {
            return [
                'exito' => false,
                'mensaje' => 'Error al insertar: ' . $this->conexion->error
            ];
        }
    }
}
?>