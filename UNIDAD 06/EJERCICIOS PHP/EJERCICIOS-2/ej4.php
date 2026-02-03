<?php
$conexion = new mysqli("localhost", "root", "", "mi_base");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $email = $_POST["email"];

    $sql = "UPDATE usuarios SET email='$email' WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        echo "Email actualizado correctamente<br><br>";
    } else {
        echo "Error al actualizar";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
<h2>Actualizar Email</h2>

<form method="POST">
    ID del usuario:<br>
    <input type="number" name="id" required><br><br>

    Nuevo email:<br>
    <input type="email" name="email" required><br><br>

    <input type="submit" value="Actualizar">
</form>
</body>
</html>