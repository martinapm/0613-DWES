<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Variable</title>
</head>
<body>
<?php
    $entero = 10;
    $decimal = 8.22;
    $booleano = true;
    $cadena = "cadena";
    define("PI", 3.14);

    echo "Entero: $entero<br>";
    echo "Decimal: $decimal<br>";
    echo "Booleano: " . ($booleano ? "true" : "false") . "<br>";
    echo "Cadena: $cadena<br>";
    echo "Constante PI: " . PI . "<br>";

    $suma = $entero + $decimal;
    echo "Suma del entero y el decimal: $suma";
?>

</body>
</html>
