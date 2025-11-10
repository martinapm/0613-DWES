<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contar Vocales</title>
</head>
<body>
<?php
function contarVocales($texto) {
    $texto = strtolower($texto);
    $vocales = 0;
    for ($i = 0; $i < strlen($texto); $i++) {
        if ($texto[$i] == 'a' || $texto[$i] == 'e' || $texto[$i] == 'i' || $texto[$i] == 'o' || $texto[$i] == 'u') {
            $vocales++;
        }
    }
    return $vocales;
}

echo contarVocales("Hola Mundo");
?>



</body>
</html>