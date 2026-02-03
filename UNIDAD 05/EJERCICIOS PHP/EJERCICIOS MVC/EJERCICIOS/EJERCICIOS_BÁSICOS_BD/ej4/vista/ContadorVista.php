<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Contador Visitas</h1>
        <?php if ($error): ?>
            <div class="error">
                <p><?= htmlspecialchars($mensajeError); ?></p>
            </div>
        <?php else: ?>
            <div class="contador-display">
                <div class="contador-label">Total de Visitas</div>
                <div class="contador-numero"><?= htmlspecialchars($totalVisitas); ?></div>
                <div class="contador-unidad">
                    <?= $totalVisitas === 1 ? 'visita' : 'visitas'; ?>
                </div>
            </div>
            <button class="boton" onclick="location.reload()">Recargar y Contar</button>
        <?php endif; ?>
    </div>
</body>
</html>