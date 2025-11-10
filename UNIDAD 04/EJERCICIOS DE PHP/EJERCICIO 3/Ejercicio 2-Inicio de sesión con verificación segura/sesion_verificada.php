<?php
session_start();

// Inicializar array si no existe
if(!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="POST">
        Correo: <input type="email" name="correo" required><br><br>
        Contraseña: <input type="password" name="password" required><br><br>
        <button type="submit" name="login">Entrar</button>
    </form>

    <?php
    if(isset($_POST['login'])) {
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $encontrado = false;
        
        // Buscar usuario en el array
        foreach($_SESSION['usuarios'] as $usuario) {
            if($usuario['correo'] == $correo) {
                $encontrado = true;
                
                // Verificar contraseña encriptada
                if(password_verify($password, $usuario['contraseña'])) {
                    // Crear sesión de usuario autenticado
                    $_SESSION['usuario_logueado'] = $usuario['nombre'];
                    $_SESSION['correo_logueado'] = $usuario['correo'];
                    
                    echo "<p>Bienvenido " . $usuario['nombre'] . "</p>";
                    echo "<p><a href='registro_usuario.php'>Ir al panel</a></p>";
                } else {
                    echo "<p>Contraseña incorrecta</p>";
                }
                break;
            }
        }
        
        if(!$encontrado) {
            echo "<p>Usuario no encontrado</p>";
        }
    }
    ?>
</body>
</html>