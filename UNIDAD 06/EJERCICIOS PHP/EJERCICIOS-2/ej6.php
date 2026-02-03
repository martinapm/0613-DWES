<?php
$conexion = new mysqli("localhost", "root", "", "mi_base");

$resultado = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $sql = "SELECT * FROM usuarios WHERE nombre LIKE '%$nombre%'";
    $resultado = $conexion->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>
<h2>Buscar Usuario</h2>

<form method="POST">
    Nombre:<br>
    <input type="text" name="nombre" required><br><br>
    <input type="submit" value="Buscar">
</form>

<?php if ($resultado): ?>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
    </tr>

    <?php while ($fila = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= $fila["ID"] ?></td>
            <td><?= $fila["Nombre"] ?></td>
            <td><?= $fila["Email"] ?></td>
        </tr>
    <?php endwhile; ?>
</table>
<?php endif; ?>

</body>
</html>