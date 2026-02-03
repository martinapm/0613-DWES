<?php
$conexion = new mysqli("localhost", "root", "", "mi_base");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre, email, password)
            VALUES ('$nombre', '$email', '$password')";

    if ($conexion->query($sql) === TRUE) {
        echo "Usuario registrado correctamente<br><br>";
    } else {
        echo "Error al registrar usuario";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
<h2>Registro de Usuario</h2>

<form method="POST">
    Nombre:<br>
    <input type="text" name="nombre" required><br><br>

    Email:<br>
    <input type="email" name="email" required><br><br>

    Contraseña:<br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Registrar">
</form>

<br>
<a href="ej8.php">Ir al login</a>
</body>
</html>