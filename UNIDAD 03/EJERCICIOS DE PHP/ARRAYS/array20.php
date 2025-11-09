<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Array de 20 números</title>
</head>
<body>
<?php
$numeros = [];

for ($i = 0; $i < 20; $i++) {
    $numeros[$i] = rand(1, 100);
}

$suma = 0;

foreach ($numeros as $n) {
    $suma += $n;
}

$promedio = $suma / count($numeros);

echo "El promedio es: $promedio";
?>
</body>
</html>