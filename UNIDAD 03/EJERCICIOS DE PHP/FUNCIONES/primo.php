<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Número Primo</title>
</head>
<body>
<?php
function esPrimo($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

echo esPrimo(7) ? "Es primo" : "No es primo";
?>

</body>
</html>