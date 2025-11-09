<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Palindromo</title>
</head>
<body>
<?php
function esPalindromo($palabra) {
    $palabra = strtolower($palabra);
    $reves = strrev($palabra);
    if ($palabra == $reves) {
        return true;
    } else {
        return false;
    }
}

echo esPalindromo("oso") ? "Es palindromo" : "No es palindromo";
?>

</body>
</html>