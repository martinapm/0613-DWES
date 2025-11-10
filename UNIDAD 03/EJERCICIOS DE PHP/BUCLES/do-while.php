<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contraseña</title>
</head>
<body>
<?php
$contraseña = "1234";
$intentar = "";

do {
    $intentar = readline("Introduce la contraseña: ");
}while ($intentar != $contraseña);

echo "Contraseña correcta";

?>



</body>
</html>