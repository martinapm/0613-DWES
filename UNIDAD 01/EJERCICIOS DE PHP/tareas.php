<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Mis Tareas</h1>

    <?php

    $archivo = "tareas.txt";


    if (file_exists($archivo)) {
        $tareas = file($archivo, FILE_IGNORE_NEW_LINES);
        echo "<ul>";
        foreach ($tareas as $tarea) {
            echo "<li>$tarea</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay tareas guardadas todavía.</p>";
    }
    ?>
</body>
</html>
