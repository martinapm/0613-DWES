<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Eliminar Usuario</title>
</head>
<body>
    <h2>Eliminar Usuario</h2>
    
    <form method="GET">
        <label>ID del Usuario a eliminar:</label><br>
        <input type="number" name="id" required><br><br>
        <input type="submit" value="Eliminar">
    </form>
    
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        if ($id === '') {
            echo "<p>Error: El ID es obligatorio</p>";
        } else {
            $conexion = mysqli_connect("localhost", "root", "", "usuario_db");
            $sql = "DELETE FROM usuarios WHERE id = $id";
            
            if (mysqli_query($conexion, $sql)) {
                if (mysqli_affected_rows($conexion) > 0) {
                    echo "<p>Usuario eliminado correctamente</p>";
                } else {
                    echo "<p>No se encontró usuario con ese ID</p>";
                }
            } else {
                echo "<p>Error: " . mysqli_error($conexion) . "</p>";
            }
            
            mysqli_close($conexion);
        }
    }
    ?>
    
    <br><br>
    <a href="ej2.php">Ver lista de usuarios</a> <br><br>
    <a href="ej1.html">Registrar nuevo usuario</a>
</body>
</html>