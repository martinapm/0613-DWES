<?php
$conexion = new mysqli("localhost", "root", "", "mi_base");

$registros_por_pagina = 5;
$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : 1;
$inicio = ($pagina - 1) * $registros_por_pagina;

$sql = "SELECT * FROM usuarios LIMIT $inicio, $registros_por_pagina";
$resultado = $conexion->query($sql);

$total_sql = "SELECT COUNT(*) AS total FROM usuarios";
$total_resultado = $conexion->query($total_sql);
$total_filas = $total_resultado->fetch_assoc()["total"];
$total_paginas = ceil($total_filas / $registros_por_pagina);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
</head>
<body>
<h2>Paginación de Usuarios</h2>

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

<br>

<?php for ($i = 1; $i <= $total_paginas; $i++): ?>
    <a href="ej7.php?pagina=<?= $i ?>"><?= $i ?></a>
<?php endfor; ?>

</body>
</html>