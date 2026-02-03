<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Formulario de Contacto</h1>
        

        <?php if ($formularioEnviado): ?>

            <div class="exito-container">
                <h2>¡Formulario Enviado Correctamente!</h2>
            </div>
            <div class="volver">
                <a href="index.php">Enviar otro mensaje</a>
            </div>

        <?php else: ?>

            <?php if (isset($errores) && !empty($errores)): ?>
                <div class="error-container">
                    <ul>
                        <?php foreach ($errores as $error): ?>
                            <li><?= htmlspecialchars($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>


            <form method="POST" class="formulario">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required 
                           value="<?= isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required 
                           value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea id="mensaje" name="mensaje" required><?= isset($_POST['mensaje']) ? htmlspecialchars($_POST['mensaje']) : ''; ?></textarea>
                </div>

                <button type="submit">Enviar Mensaje</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>