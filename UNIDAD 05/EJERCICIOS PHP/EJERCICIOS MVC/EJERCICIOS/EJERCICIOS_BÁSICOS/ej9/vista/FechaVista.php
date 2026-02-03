<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrador de Fecha y Hora</title>
</head>
<body>
    <div class="container">
        <h1>Fecha y Hora Actual</h1>

        <div class="fecha">
            <div class="fecha-texto"><?= $fechaFormato; ?></div>
            <div class="hora-texto"><?= $hora; ?></div>
        </div>

        <div class="info">
            <p><span class="label">Fecha completa:</span></p>
            <p><?= $fechaCompleta; ?></p>
        </div>

        <div class="detalles">
            <div class="detalle-item">
                <div class="detalle-label">AÑO</div>
                <div class="detalle-valor"><?= date('Y'); ?></div>
            </div>
            <div class="detalle-item">
                <div class="detalle-label">MES</div>
                <div class="detalle-valor"><?= date('m'); ?></div>
            </div>
            <div class="detalle-item">
                <div class="detalle-label">DÍA</div>
                <div class="detalle-valor"><?= date('d'); ?></div>
            </div>
            <div class="detalle-item">
                <div class="detalle-label">SEGUNDO</div>
                <div class="detalle-valor"><?= date('s'); ?></div>
            </div>
        </div>
    </div>
</body>
</html>