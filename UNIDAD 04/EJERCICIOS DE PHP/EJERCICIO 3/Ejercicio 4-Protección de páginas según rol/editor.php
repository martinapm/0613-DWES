<?php
session_start();

    //Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    echo "<h3>Acceso denegado. Debes iniciar sesión.</h3>";
    echo "<a href='login.php'>Ir al login</a>";
    exit;
}

    //Verifica si el usuario tiene el rol de editor
$rol = $_SESSION['usuario']['rol'];
if ($rol !== 'admin' && $rol !== 'editor') {
    echo "<h3>Acceso denegado. Solo los editores o administradores pueden entrar aquí.</h3>";
    echo "<a href='usuario.php'>Volver</a>";
    exit;
}
?>

<h2>Zona de edición</h2>
<p>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']['nombre']); ?>.</p>
<p>Aquí puedes modificar el contenido existente.</p>

<hr>
<a href="logout.php">Cerrar sesión</a>
