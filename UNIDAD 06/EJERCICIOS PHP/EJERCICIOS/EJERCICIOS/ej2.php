<?php
$conexion = mysqli_connect("localhost", "root", "", "usuario_db");
$sql = "SELECT id, nombre, email FROM usuarios";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Usuarios Registrados</h2>
    
    <?php
    if (mysqli_num_rows($resultado) > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Email</th></tr>";
        
        while($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila["id"] . "</td>";
            echo "<td>" . $fila["nombre"] . "</td>";
            echo "<td>" . $fila["email"] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "No hay usuarios registrados";
    }
    
    mysqli_close($conexion);
    ?>
    
    <br><br>
    <a href="ej1.html">Registrar nuevo usuario</a><br><br>
    <a href="ej3.php">Actualizar email</a><br><br>
    <a href="ej4.php">Eliminar usuario</a><br><br>
    <a href="ej5.php">Buscar usuarios</a>
    
</body>
</html>