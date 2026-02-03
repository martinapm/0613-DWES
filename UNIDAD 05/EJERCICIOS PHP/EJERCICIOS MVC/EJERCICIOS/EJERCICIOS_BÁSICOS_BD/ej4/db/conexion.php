<?php
class conexion {
private $host = "localhost";
private $user = "root";
private $pass = "";
private $db = "ej_basico";
public $conn;
public function conectar() {
    $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
    if ($this->conn->connect_error) {
        die("Error de conexión MySQLi: " . $this->conn->connect_error);
        }
            return $this->conn;
     }
    }
?>