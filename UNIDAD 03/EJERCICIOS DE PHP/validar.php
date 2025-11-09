<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validar formulario</title>
    <form method="post">
    Nombre: <input type="text" name="nombre"><br>
    <input type="submit" value="Enviar">
</form>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"])) {
        echo "El campo nombre es obligatorio.";
    } else {
        echo "Hola, " . htmlspecialchars($_POST["nombre"]);
    }
}
?>
    
</body>
</html>