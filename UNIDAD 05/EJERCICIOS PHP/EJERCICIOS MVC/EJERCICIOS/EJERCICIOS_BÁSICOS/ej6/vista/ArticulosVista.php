<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Artículos</title>
</head>
<body>
    <h1>Artículos</h1>

    <div class="filtros">
        <a href="index.php">Ver todos</a>
        <?php foreach ($categorias as $cat): ?>
            <a href="index.php?categoria=<?= urlencode($cat); ?>">
                <?= $cat; ?>
            </a>
        <?php endforeach; ?>
    </div>

    <?php if (empty($articulos)): ?>
        <p>No hay artículos en esta categoría.</p>
    <?php else: ?>
        <?php foreach ($articulos as $articulo): ?>
            <div class="articulo">
                <div class="categoria"><?= $articulo['categoria']; ?></div>
                <h3><?= $articulo['titulo']; ?></h3>
                <p><?= $articulo['contenido']; ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>