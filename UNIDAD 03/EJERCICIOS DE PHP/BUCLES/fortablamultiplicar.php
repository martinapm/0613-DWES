<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar </h1>

    <form method = "post" action "">
        <label for="numero">Elige un número: </label>
        <input type ="number" name="numero" required>
        <input type="submit" value="Calcular">
    </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST['numero'];
        echo "<h2>Tabla de multiplicar del $numero: </h2>";

        for ($i = 1; $i <= 10; $i++){
            echo "numero x $i = " . ($numero * $i) . "<br>";
        }
    }

?>

</body>
</html>