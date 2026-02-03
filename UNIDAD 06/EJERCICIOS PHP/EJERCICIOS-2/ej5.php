<?php
$conexion = new mysqli("localhost", "root", "", "mi_base");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM usuarios WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        echo "Usuario eliminado correctamente<br><br>";
    } else {
        echo "Error al eliminar";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
<h2>Eliminar Usuario</h2>

<form method="POST">
    ID del usuario:<br>
    <input type="number" name="id" required><br><br>

    <input type="submit" value="Eliminar">
</form>
</body>
</html>