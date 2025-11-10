<?php
session_start();

// Variable (simula el bd)
if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}

// Se envía al formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    // Encripta la contraseña
    $password_encriptada = password_hash($password, PASSWORD_DEFAULT);

    // Se guarda en la variable creada anteriormente
    $_SESSION['usuarios'][] = [
        'nombre' => $nombre,
        'correo' => $correo,
        'password' => $password_encriptada,
        'rol' => $rol
    ];

    echo "<h3>Usuario registrado correctamente.</h3>";
    echo "<p><b>Nombre:</b> $nombre</p>";
    echo "<p><b>Correo:</b> $correo</p>";
    echo "<p><b>Rol:</b> $rol</p>";
    echo "<hr><a href='login.php'>Ir al inicio de sesión</a>";
    exit;
}
?>


<h2>Registro de usuario</h2>
<form method="post" action="">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Correo:</label><br>
    <input type="email" name="correo" required><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Rol:</label><br>
    <select name="rol" required>
        <option value="admin">Admin</option>
        <option value="editor">Editor</option>
        <option value="usuario" selected>Usuario</option>
    </select><br><br>

    <input type="submit" value="Registrar">
</form>
