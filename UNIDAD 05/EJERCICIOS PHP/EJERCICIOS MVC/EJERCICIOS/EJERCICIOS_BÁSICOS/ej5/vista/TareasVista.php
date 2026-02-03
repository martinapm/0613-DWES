<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Tareas</title>
</head>
<body>
    <h1>Listado de Tareas</h1>

    <?php foreach ($tareas as $tarea): ?>
        <div class="tarea <?= $tarea['estado']; ?>">
            <strong><?= $tarea['titulo']; ?></strong>
            <span style="float: right; font-size: 12px;">
                <?= ucfirst($tarea['estado']); ?>
            </span>
        </div>
    <?php endforeach; ?>
</body>
</html>