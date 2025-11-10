<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <h2>Calculadora</h2>

    <form method="post">
        <input type="number" name="num1" step="any" required>
        <select name="operacion">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multi">Multiplicar</option>
            <option value="div">Dividir</option>
        </select>
        <input type="number" name="num2" step="any" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $op = $_POST['operacion'];

            if (is_numeric($a) && is_numeric($b)) {
                switch ($op) {
                    case "suma": $res = $a + $b; break;
                    case "resta": $res = $a - $b; break;
                    case "multi": $res = $a * $b; break;
                    case "div":
                        if ($b != 0) $res = $a / $b;
                        else $res = "Error: división por cero";
                        break;
                }
                echo "<h2>Resultado: $res</h2>";
            } else {
                echo "<p>Introduce números válidos.</p>";
            }
        }
    ?>
</body>
</html>
