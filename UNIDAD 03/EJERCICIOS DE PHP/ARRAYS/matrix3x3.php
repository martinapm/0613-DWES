<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Matrix 3x3</title>
</head>
<body>
<?php
$matriz = [
    [9, 4, 6],
    [1, 5, 7],
    [3, 8, 9]
];

$suma = 0;

for ($i = 0; $i < 3; $i++) {
    $suma += $matriz[$i][$i];
}

echo "La suma de la diagonal principal es: $suma";
?>

</body>
</html>