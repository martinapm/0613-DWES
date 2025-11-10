<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>

<?php include 'cabecera.php'; ?>

<nav>
    <a href="pagina.php?seccion=inicio">Inicio</a> |
    <a href="pagina.php?seccion=servicios">Servicios</a> |
    <a href="pagina.php?seccion=contacto">Contacto</a>
</nav>
<hr>

<?php

if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
} else {
    $seccion = 'inicio'; 
}


if ($seccion == 'inicio') {
    include 'index.php';
} elseif ($seccion == 'servicios') {
    include 'servicios.php';
} elseif ($seccion == 'contacto') {
    include 'contacto.php';
} else {
    echo "<p>Sección no encontrada.</p>";
}
?>

<?php include 'footer.php'; ?>

</body>
</html>
