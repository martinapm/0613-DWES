<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
    <h2>Productos</h2>

    <?php
        $archivo = "producto.txt";

        if (file_exists($archivo)) {
            $lineas = file($archivo);
            if (count($lineas) > 0) {
                echo "<table border='1'>
                        <tr><th>Producto</th><th>Precio (€)</th></tr>";
                foreach ($lineas as $linea) {
                    list($nombre, $precio) = explode(",", trim($linea));
                    echo "<tr><td>$nombre</td><td>$precio</td></tr>";
                }
                echo "</table>";
            } else {
                echo "El archivo está vacío.";
            }
        } else {
            echo "El archivo no existe.";
        }
    ?>
</body>
</html>
