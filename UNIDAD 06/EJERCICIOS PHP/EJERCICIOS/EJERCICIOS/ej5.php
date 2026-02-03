<!DOCTYPE html>
<html>
<head>
    <title>Buscar Usuario</title>
</head>
<body>
    <h2>Buscar Usuario</h2>
    
    <form method="POST">
        <label>Buscar usuario:</label><br>
        <input type="text" name="nombre" required><br><br>
        
        <input type="submit" value="Buscar">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        
        if ($nombre === '') {
        } else {
            $conexion = mysqli_connect("localhost", "root", "", "usuario_db");
            
            $sql = "SELECT id, nombre, email FROM usuarios WHERE nombre LIKE '%$nombre%'";
            $resultado = mysqli_query($conexion, $sql);
            
            if (mysqli_num_rows($resultado) > 0) {
                echo "<h3>Usuarios encontrados:</h3>";
                echo "<table border='1'>";
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
                echo "<p>No hay usuarios que contengan: '$nombre'</p>";
            }
            
            mysqli_close($conexion);
        }
    }
    ?>
    
    <br>
    <a href="ej2.php">Lista completa</a><br><br>
    <a href="ej1.html">Nuevo usuario</a><br><br>
    <a href="ej3.php">Actualizar</a><br><br>
    <a href="ej4.php">Eliminar</a><br><br>
</body>
</html>