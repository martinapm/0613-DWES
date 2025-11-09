<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contraseña</title>
</head>
<body>

<?php
function generarPassword($longitud) {
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = "";

    for ($i = 0; $i < $longitud; $i++) {
        $password .= $caracteres[rand(0, strlen($caracteres)-1)];
    }

    return $password;
}

echo generarPassword(8);
?>

</body>
</html>