<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Temperatura</title>
</head>
<body>
<?php
function convertir($celsius) {
    return $celsius * 9 / 5 + 32;
}

echo convertir(25);
?>

</body>
</html>