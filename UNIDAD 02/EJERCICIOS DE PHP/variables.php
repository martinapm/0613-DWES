<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
<?php
    $mensaje = "Bienvenido al sitio";

    function mostrar_mensaje() {
        global $mensaje;
        $local = "Gracias";
        echo "$mensaje<br>";
        echo "$local<br>";
    }

    mostrar_mensaje();
?>

</body>
</html>
