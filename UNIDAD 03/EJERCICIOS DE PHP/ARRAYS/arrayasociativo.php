<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Array Asociativo</title>
</head>
<body>
<?php
$productos = [
    "Camiseta" => 25,
    "Pantalón" => 35,
    "Zapatos" => 50,
    "Gorra" => 15,
    "Chaqueta" => 60
];

$maxPrecio = 0;
$productoCaro = "";

foreach ($productos as $producto => $precio) {
    if ($precio > $maxPrecio) {
        $maxPrecio = $precio;
        $productoCaro = $producto;
    }
}

echo "El producto más caro es $productoCaro con un precio de $maxPrecio €.";
?>

</body>
</html>