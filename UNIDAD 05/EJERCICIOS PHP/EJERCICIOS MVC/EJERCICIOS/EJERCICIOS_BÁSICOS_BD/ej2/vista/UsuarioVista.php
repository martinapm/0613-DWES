<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <h1>Información Usuario</h1>

        <?php if (isset($error)): ?>
            <div class="error">
                <p><?= $error; ?></p>
            </div>
            <div class="volver">
                <a href="index.php?id=1">← Volver al Usuario 1</a>
            </div>
        <?php else: ?>
            <div class="usuario-info">
                <div>
                    <span class="etiqueta">ID:</span>
                    <span class="valor"><?= htmlspecialchars($datos['id']); ?></span>
                </div>
                <div>
                    <span class="etiqueta">Nombre:</span>
                    <span class="valor"><?= htmlspecialchars($datos['nombre']); ?></span>
                </div>
                <div>
                    <span class="etiqueta">Email:</span>
                    <span class="valor"><?= htmlspecialchars($datos['email']); ?></span>
                </div>
            </div>
            <div class="volver">
                <p>Para consultar otro usuario, modifica el parámetro ID en la URL:</p>
                <p style="color: #999; font-size: 12px; margin-top: 10px;">
                    Ejemplo: index.php?id=2
                </p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>