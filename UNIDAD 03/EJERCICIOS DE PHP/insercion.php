<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Inserción de datos en base de datos con PHP</title></head>
<body>
<form method="post">
    Nombre: <input type="text" name="nombre"><br>
    Edad: <input type="number" name="edad"><br>
    <input type="submit" value="Enviar">
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    echo "<p>Datos recibidos:</p>";
    echo "Nombre: $nombre <br>Edad: $edad";
}
?>
</body>
</html>
