<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Valores</title>
</head>
<body>
<?php
function datosArray($numeros) {
    $max = $numeros[0];
    $min = $numeros[0];
    $suma = 0;

    foreach ($numeros as $n) {
        if ($n > $max) $max = $n;
        if ($n < $min) $min = $n;
        $suma += $n;
    }

    $promedio = $suma / count($numeros);

    echo "Máximo: $max<br>";
    echo "Mínimo: $min<br>";
    echo "Promedio: $promedio";
}

$lista = [4, 7, 2, 9, 5];
datosArray($lista);
?>


</body>
</html>