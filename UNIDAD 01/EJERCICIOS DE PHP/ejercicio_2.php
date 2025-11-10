<!DOCTYPE html>
<html>
<head>
    <title>Verificar Edad</title>
</head>
<body>
    <form method="post" action="">
        <label for="edad">Ingrese su edad:</label>
        <input type="number" name="edad" id="edad" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST["edad"];
        if ($edad >= 18) {
            echo "<p>Eres mayor de edad.</p>";
        } else {
            echo "<p>Eres menor de edad.</p>";
        }
    }
    ?>
</body>
</html>
