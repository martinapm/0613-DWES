<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_datos = "mi_base";

$conexion = new mysqli($servidor, $usuario, $clave, $base_datos);

$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <h2>Lista de Usuarios</h2>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>

        <?php
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$fila["ID"]."</td>";
                echo "<td>".$fila["Nombre"]."</td>";
                echo "<td>".$fila["Email"]."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No hay registros</td></tr>";
        }
        ?>
    </table>

    <br>
    <a href="ej2.php">Volver al formulario</a>
</body>
</html>