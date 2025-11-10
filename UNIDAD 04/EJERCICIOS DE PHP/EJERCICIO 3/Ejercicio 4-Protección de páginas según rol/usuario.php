<?php
session_start();

    //Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    echo "<h3>Acceso denegado. Debes iniciar sesión.</h3>";
    echo "<a href='login.php'>Ir al login</a>";
    exit;
}
    //Obtiene datos del usuario y lo almacena
$usuario = $_SESSION['usuario'];
?>

<h2>Zona de usuario</h2>
<p>Bienvenido, <?php echo htmlspecialchars($usuario['nombre']); ?> (<?php echo htmlspecialchars($usuario['rol']); ?>)</p>

<ul>
   <!-- Menú de navegación para cada rol -->
    <?php if ($usuario['rol'] === 'admin') echo "<li><a href='admin.php'>Ir a panel ADMIN</a></li>"; ?>
    <?php if ($usuario['rol'] === 'editor' || $usuario['rol'] === 'admin') echo "<li><a href='editor.php'>Ir a zona EDITOR</a></li>"; ?>
    <li><a href='usuario.php'>Zona de usuario</a></li>
</ul>

<hr>
<a href="logout.php">Cerrar sesión</a>
