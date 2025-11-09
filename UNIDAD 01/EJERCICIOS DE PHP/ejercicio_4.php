<?php
$archivo = "datos.txt";

if (file_exists($archivo)) {
    $lineas = file($archivo);
    echo "<h2>Contenido del archivo:</h2>";
    foreach ($lineas as $linea) {
        echo htmlspecialchars($linea) . "<br>";
    }
} else {
    echo "El archivo $archivo no existe.";
}
?>
