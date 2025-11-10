<?php
session_start();

    //Verifica que existen usuarios en el sistema
if (!isset($_SESSION['usuarios']) || empty($_SESSION['usuarios'])) {
    echo "<h3>No hay usuarios registrados.</h3>";
    echo "<a href='registro.php'>Ir al registro</a>";
    exit;
}

    //Maneja el formulario del login cuando se envía el POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $login_ok = false;

    //Busca y valida el usuario
    foreach ($_SESSION['usuarios'] as $usuario) {
        if ($usuario['correo'] === $correo && password_verify($password, $usuario['password'])) {
            $_SESSION['usuario'] = $usuario; 
            $login_ok = true;
            break;
        }
    }
    //Si el usuario existe, se va al "inicio" del usuario
    if ($login_ok) {
        header("Location: usuario.php"); 
        exit;
    } else {
        echo "<h3>Correo o contraseña incorrectos.</h3>";
    }
}
?>

<h2>Inicio de sesión</h2>
<form method="post" action="">
    <label>Correo:</label><br>
    <input type="email" name="correo" required><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Entrar">
</form>

<hr>
<a href="registro.php">Registrase aquí sino tienes cuenta</a>
