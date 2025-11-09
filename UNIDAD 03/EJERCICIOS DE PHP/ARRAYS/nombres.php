<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nombre de 10 alumnos</title>
</head>
<body>
<?php
$alumnos = ["Rafael", "Ana", "Bea", "Gabriel", "Marta", "Sergio", "Martina", "Pedro", "Alejandro", "Arianna"];

sort($alumnos);

foreach ($alumnos as $alumno) {
    echo $alumno . "<br>";
}
?>

</body>
</html>