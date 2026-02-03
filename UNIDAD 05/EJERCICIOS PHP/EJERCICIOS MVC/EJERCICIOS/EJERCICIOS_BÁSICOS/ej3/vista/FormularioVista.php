<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
</head>
<body>
    <h1>Formulario de Contacto</h1>

    <?php if (isset($errores)): ?>
        <div style="color: red;">
            <p><strong>Errores:</strong></p>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?= $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= isset($datos['nombre']) ? $datos['nombre'] : ''; ?>" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?= isset($datos['email']) ? $datos['email'] : ''; ?>" required>
        <br><br>

        <label>Mensaje:</label>
        <textarea name="mensaje" rows="5" required><?= isset($datos['mensaje']) ? $datos['mensaje'] : ''; ?></textarea>
        <br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>