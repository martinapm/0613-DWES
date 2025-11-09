<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>IVA incluido</title>
</head>
<body>

<?php
$productos = [
    ["nombre" => "Camisa", "precio" => 20],
    ["nombre" => "Pantalón", "precio" => 30],
    ["nombre" => "Zapatos", "precio" => 50]
];

$total = 0;

foreach ($productos as $p) {
    echo $p["nombre"] . ": " . $p["precio"] . "€<br>";
    $total += $p["precio"];
}

$iva = $total * 0.21;
$totalConIva = $total + $iva;

echo "<br>Total sin IVA: $total €";
echo "<br>IVA (21%): $iva €";
echo "<br>Total con IVA: $totalConIva €";
?>

</body>
</html>