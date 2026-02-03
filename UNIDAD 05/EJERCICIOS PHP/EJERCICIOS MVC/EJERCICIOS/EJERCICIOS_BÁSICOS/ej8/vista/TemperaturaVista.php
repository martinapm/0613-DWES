<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <div class="container">
        <h1>Conversor de Temperatura</h1>

        <?php if (isset($error)): ?>
            <div class="error">
                <strong>Error:</strong> <?= $error; ?>
            </div>
        <?php endif; ?>

        <?php if (!isset($fahrenheit)): ?>
            <form method="POST" class="formulario">
                <label for="celsius">Ingresa grados Celsius:</label>
                <input type="number" id="celsius" name="celsius" step="0.01" placeholder="Ej: 25" required>
                <button type="submit">Convertir</button>
            </form>
        <?php else: ?>
            <div class="resultado">
                <h2>Resultado</h2>
                <div class="conversion">
                    <span class="celsius-valor"><?= $celsius; ?>°C</span>
                    <span class="flecha">→</span>
                    <span class="fahrenheit-valor"><?= $fahrenheit; ?>°F</span>
                </div>
            </div>

            <div class="enlace">
                <a href="index.php">Convertir otra temperatura</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>