<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "mi_base";

$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);

echo "Conexión realizada correctamente";
?>