<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form method = "post" action= "">
        <label for="numero">Elige un número: </label>
        <input type="number" name="numero" required>
        <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $factorial = 1;
    $i = 1;

    while ($i <= numero) {
        $factorial *= $i;
        $i++;
    }

    echo "<h2>EL factorial del $numero es: $factorial</h2>";
    
}

?>

</body>
</html>