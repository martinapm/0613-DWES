<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>

        <?php if (isset($error)): ?>
            <div class="error">
                <strong>Error:</strong> <?= $error; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($exito) && $exito): ?>
            <div class="exito">
                <strong><?= $mensaje; ?></strong>
                <p>Bienvenido al sistema.</p>
            </div>
            <a href="index.php" style="display: block; text-align: center; margin-top: 15px; color: #667eea; text-decoration: none;">
                Volver al login
            </a>
        <?php else: ?>
            <form method="POST">
                <input type="text" name="usuario" placeholder="Usuario" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <button type="submit">Entrar</button>
            </form>

            <div class="info">
                <strong>Credenciales de prueba:</strong><br>
                Usuario: admin<br>
                Contraseña: 1234
            </div>
        <?php endif; ?>
    </div>
</body>
</html>