<?php
session_start();

    //Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    echo "<h3>Acceso denegado. Debes iniciar sesión.</h3>";
    echo "<a href='login.php'>Ir al login</a>";
    exit;
}

    //Verifica si el usuario tiene el rol de admin
if ($_SESSION['usuario']['rol'] !== 'admin') {
    echo "<h3>Acceso denegado. Solo los administradores pueden entrar aquí.</h3>";
    echo "<a href='usuario.php'>Volver</a>";
    exit;
}
?>

<h2>Panel de administración</h2>
<p>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']['nombre']); ?>.</p>
<p>Aquí puedes gestionar usuarios y configuraciones.</p>

<hr>
<a href="logout.php">Cerrar sesión</a>
