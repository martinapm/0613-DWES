<select name="poblacion">
<?php
$mysqli = new mysqli("localhost", "usuarios", "clave", "base_datos");
$query = "SELECT codigo, nombre FROM poblaciones";
$result = $mysqli->query($query);
/* Recorremos los datos */
$salida = '';
while($row = $result->fetch_object()) {
    $salida .= '<option value="' . $row->codigo . '" ' . ($usuario->poblacion == $row->codigo ? 'selected' : '') . '>' . $row->nombre . '</option>';
}
echo $salida;
/* liberar la serie de resultados */
$result->free();
/* cerrar la conexión */
$mysqli->close();
?>
</select>