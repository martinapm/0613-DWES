<?php
$conexion = new mysqli("localhost", "root", "", "mi_base");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_archivo = $_FILES["imagen"]["name"];
    $ruta_temporal = $_FILES["imagen"]["tmp_name"];
    $ruta_destino = "uploads/" . $nombre_archivo;

    if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
        $sql = "INSERT INTO imagenes (nombre_imagen) VALUES ('$nombre_archivo')";
        if ($conexion->query($sql) === TRUE) {
            echo "Imagen subida y guardada en la base de datos<br><br>";
        } else {
            echo "Error al guardar en la base de datos";
        }
    } else {
        echo "Error al subir la imagen";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9</title>
</head>
<body>

<h2>Subir Imagen</h2>

<form method="POST" enctype="multipart/form-data">
    Selecciona una imagen:<br>
    <input type="file" name="imagen" required><br><br>

    <input type="submit" value="Subir">
</form>

</body>
</html>