<?php
session_start();

    //Crea array de usuario sino existe
if (!isset($_SESSION['usuarios_seguridad'])) {
    $_SESSION['usuarios_seguridad'] = [];
}

    //Configuración de cifrado para la iniciación
$metodo = "AES-256-CBC";
$clave = "clave_super_segura_1234"; 
$iv = substr(hash('sha256', 'vector_inicial'), 0, 16); 

    //Maneja el registro de nuevos usuarios
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Obtiene los datos de los formularios con valores 
    $nombre = $_POST['nombre'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $password = $_POST['password'] ?? '';
    $telefono = $_POST['telefono'] ?? '';

        //Cifrado de contraseña
    $password_encriptada = password_hash($password, PASSWORD_DEFAULT);

        //Cifrado de teléfono
    $telefono_cifrado = openssl_encrypt($telefono, $metodo, $clave, 0, $iv);

        //Guarda los datos del usuario con datos protegidos
    $_SESSION['usuarios_seguridad'][] = [
        'nombre' => $nombre,
        'correo' => $correo,
        'password' => $password_encriptada,
        'telefono' => $telefono_cifrado
    ];
        //Mostrar datos
    echo "<h3>Datos almacenados correctamente.</h3>";
    echo "<p><b>Nombre:</b> " . htmlspecialchars($nombre) . "</p>";
    echo "<p><b>Correo:</b> " . htmlspecialchars($correo) . "</p>";
    echo "<p><b>Contraseña cifrada:</b> " . htmlspecialchars($password_encriptada) . "</p>";
    echo "<p><b>Teléfono cifrado:</b> " . htmlspecialchars($telefono_cifrado) . "</p>";
    echo "<hr><a href='?ver=1'>Ver datos descifrados</a> | <a href='?'>Volver</a>";
    exit;
}

    //Mostrar los usuarios con datos descifrados
if (isset($_GET['ver'])) {
    echo "<h2>Usuarios almacenados</h2>";
    //Recorrer todos los usuarios registrados
    foreach ($_SESSION['usuarios_seguridad'] as $u) {
        //Descifra el teléfono
        $telefono_descifrado = openssl_decrypt($u['telefono'], $metodo, $clave, 0, $iv);
        echo "<p><b>Nombre:</b> " . htmlspecialchars($u['nombre']) . "</p>";
        echo "<p><b>Correo:</b> " . htmlspecialchars($u['correo']) . "</p>";
        echo "<p><b>Contraseña (hash):</b> " . htmlspecialchars($u['password']) . "</p>";
        echo "<p><b>Teléfono (descifrado):</b> " . htmlspecialchars($telefono_descifrado) . "</p>";
        echo "<hr>";
    }
    echo "<a href='?'>Volver al formulario</a>";
    exit;
}
?>

<h2>Formulario de registro con cifrado</h2>
<form method="post" action="">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Correo:</label><br>
    <input type="email" name="correo" required><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Teléfono:</label><br>
    <input type="text" name="telefono" required><br><br>

    <input type="submit" value="Guardar datos">
</form>
