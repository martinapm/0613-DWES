<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla Dinámica</title>
</head>
<body>

<?php
$alumnos = ["Martina", "Rafael", "Marta", "Carlos"];
echo "<table border='1'>";
echo "<tr><th>Alumnos</th></tr>";
foreach($alumnos as $nombre){
    echo "<tr><td>$nombre</td></tr>";
}
echo "</table>";
?>
    
</body>
</html>