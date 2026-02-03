<?php

if (!defined('CON_CONTROLADOR')) {
    die('Error: No se puede acceder a este archivo directamente.');
}

session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Tienda</title>
</head>
<body>

<p>
    <a href="index.php?accion=tienda">Tienda</a> | 
    <a href="index.php?accion=sugerencias">Sugerencias</a> | 
    <a href="index.php?accion=registro">Registro</a>
</p>

<?php if ($vista === 'listado'): ?>
    <h1>Catálogo de Artículos</h1>
    <?php foreach ($articulos as $articulo): ?>
        <h2><?php echo $articulo['nombre']; ?></h2>
        <p>Precio: <?php echo $articulo['precio']; ?>€</p>
        <p><?php echo $articulo['descripcion']; ?></p>
        <a href="index.php?accion=tienda&id=<?php echo $art['id']; ?>">Ver detalle</a>
        <hr>
    <?php endforeach; ?>

<?php elseif ($vista === 'detalle'): ?>
    <h1><?php echo $articulo['nombre']; ?></h1>
    <p>Descripción: <?php echo $articulo['descripcion']; ?></p>
    <p>Precio: <?php echo $articulo['precio']; ?>€</p>
    <p>Stock: <?php echo $articulo['stock']; ?> unidades</p>
    <a href="index.php?accion=tienda">Volver al catálogo</a>

<?php elseif ($vista === 'error'): ?>
    <h1>Error</h1>
    <p>El artículo solicitado no existe.</p>
    <a href="index.php?accion=tienda">Volver al catálogo</a>

<?php elseif ($vista === 'sugerencias'): ?>
    <h1>Sugerencias</h1>
    
    <h2>Formulario de Sugerencia</h2>
    <form method="POST">
        <p>
            <label>Nombre:</label>
            <input type="text" name="nombre" required>
        </p>
        <p>
            <label>Email:</label>
            <input type="email" name="email" required>
        </p>
        <p>
            <label>Mensaje:</label>
            <textarea name="mensaje" rows="5" required></textarea>
        </p>
        <p>
            <button type="submit">Enviar Sugerencia</button>
        </p>
    </form>

    <h2>Sugerencias Recibidas</h2>
    <?php if (empty($sugerencias)): ?>
        <p>No hay sugerencias aun.</p>
    <?php else: ?>
        <?php foreach ($sugerencias as $sug): ?>
            <h3><?php echo $sug['nombre']; ?></h3>
            <p>Email: <?php echo $sug['email']; ?></p>
            <p>Mensaje: <?php echo $sug['mensaje']; ?></p>
            <p>Fecha: <?php echo $sug['fecha']; ?></p>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>

<?php elseif ($vista === 'registro'): ?>
    <h1>Registro de Usuario</h1>
    
    <?php if (isset($_SESSION['registro_exitoso'])): ?>
        <p>Registro realizado correctamente.</p>
        <?php unset($_SESSION['registro_exitoso']); ?>
    <?php endif; ?>

    <h2>Formulario de Registro</h2>
    <form method="POST">
        <p>
            <label>Nombre Completo:</label>
            <input type="text" name="nombre" required>
        </p>
        <p>
            <label>Email:</label>
            <input type="email" name="email" required>
        </p>
        <p>
            <label>Usuario:</label>
            <input type="text" name="usuario" required>
        </p>
        <p>
            <button type="submit">Registrarse</button>
        </p>
    </form>

    <h2>Usuarios Registrados</h2>
    <?php if (empty($_SESSION['usuarios'] ?? [])): ?>
        <p>No hay usuarios registrados aun.</p>
    <?php else: ?>
        <?php foreach ($_SESSION['usuarios'] as $user): ?>
            <h3><?php echo $user['nombre']; ?></h3>
            <p>Usuario: <?php echo $user['usuario']; ?></p>
            <p>Email: <?php echo $user['email']; ?></p>
            <p>Fecha de Registro: <?php echo $user['fecha_registro']; ?></p>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>

<?php endif; ?>

</body>
</html>
