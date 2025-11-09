<?php
session_start();

    //Verifica si existe el usuario en el sistema
if (!isset($_SESSION['usuarios']) || empty($_SESSION['usuarios'])) {
    echo "<h3>No hay usuarios registrados.</h3>";
    echo "<a href='registro.php'>Ir al registro</a>";
    exit;
}

    //Cierra sesión si el parámetro logout existe, limpia y destruye la sesión
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}

    //Verifica que el usuario existe y se muestra el panel
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];

    echo "<h3>Bienvenido, " . htmlspecialchars($usuario['nombre']) . " (" . htmlspecialchars($usuario['rol']) . ")</h3>";

        //Muestra el contenido dependiendo del rol que se ha usado
    if ($usuario['rol'] === 'admin') {
        echo "<p>Zona ADMIN: puedes gestionar usuarios y configuraciones.</p>";
    } elseif ($usuario['rol'] === 'editor') {
        echo "<p>Zona EDITOR: puedes modificar contenido existente.</p>";
    } else {
        echo "<p>Zona USUARIO: puedes ver tu perfil y contenido público.</p>";
    }
    //Muestra enlace para cerrar sesión
    echo "<hr><a href='?logout=1'>Cerrar sesión</a>";
    exit;
}

    //Maneja el formulario del login en el método post
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $login_correcto = false;
    //Busca al usuario
    foreach ($_SESSION['usuarios'] as $usuario) {
        if ($usuario['correo'] === $correo && password_verify($password, $usuario['password'])) {
            $_SESSION['usuario'] = $usuario; // guarda todo en el usuario
            $login_correcto = true;
            break;
        }
    }
    //Si el login es correcto, recarga la página
    if ($login_correcto) {
        header("Location: login.php");
        exit;
    } else {
        echo "<h3>Correo o contraseña incorrectos.</h3>";
        echo "<a href='login.php'>Intentar de nuevo</a>";
        exit;
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
<a href="registro.php">Registrese aquí sino tienes cuenta</a>
