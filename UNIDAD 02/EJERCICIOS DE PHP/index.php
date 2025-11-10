<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h2>Fecha actual: <?php echo date("Y-m-d"); ?></h2>

    <form method="post">
        <label>Escribe tu nombre:</label>
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if (!empty($_POST['nombre'])) {
            $nombre = $_POST['nombre'];
            echo "<h2>Hola, $nombre</h2>";
        }
    ?>
</body>
</html>
