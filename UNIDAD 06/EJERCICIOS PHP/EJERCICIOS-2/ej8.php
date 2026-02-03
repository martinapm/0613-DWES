<?php
$conexion = new mysqli("localhost", "root", "", "mi_base");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($password, $usuario["password"])) {
            $_SESSION["usuario"] = $usuario["nombre"];
            echo "Inicio de sesión correcto. Bienvenido " . $usuario["nombre"];
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "Usuario no encontrado";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
<h2>Login</h2>

<form method="POST">
    Email:<br>
    <input type="email" name="email" required><br><br>

    Contraseña:<br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Entrar">
</form>
</body>
</html>