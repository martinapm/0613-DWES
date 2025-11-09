<?php
session_start();

// Inicializa array si no existe
if(!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de usuario con contraseña encriptada</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form method="POST">
        Nombre: <input type="text" name="nombre" required><br><br>
        Correo: <input type="email" name="correo" required><br><br>
        Contraseña: <input type="password" name="contraseña" required><br><br>
        <button type="submit" name="registrar">Registrar</button>
    </form>

    <?php
    if(isset($_POST['registrar'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        
        // Encriptar la contraseña
        $contraseña_encriptada = password_hash($contraseña, PASSWORD_DEFAULT);
        
        // Guardar usuario en el array de sesión
        $_SESSION['usuarios'][] = [
            'nombre' => $nombre,
            'correo' => $correo,
            'contraseña' => $contraseña_encriptada
        ];
        
        echo "<p>Usuario registrado</p>";
        echo "<p>Total de usuarios: " . count($_SESSION['usuarios']) . "</p>";
    }
    ?>
</body>
</html>