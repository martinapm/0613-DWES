<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estudiantes</title>
</head>
<body>
<?php
$estudiantes = [
    ["nombre" => "Martina", "nota" => 8],
    ["nombre" => "Rafael", "nota" => 4],
    ["nombre" => "Marta", "nota" => 9]
];

$aprobados = 0;

foreach ($estudiantes as $e) {
    if ($e["nota"] >= 5) {
        $aprobados++;
    }
}

echo "Han aprobado $aprobados estudiantes.";
?>


</body>
</html>