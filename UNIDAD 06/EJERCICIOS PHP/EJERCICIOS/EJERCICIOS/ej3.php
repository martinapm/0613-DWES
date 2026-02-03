<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Email</title>
</head>
<body>
    <h2>Actualizar Email de Usuario</h2>
    
    <form method="POST">
        <label>ID del Usuario:</label><br>
        <input type="number" name="id" required><br><br>
        
        <label>Nuevo Email:</label><br>
        <input type="email" name="nuevo_email" required><br><br>
        
        <input type="submit" value="Actualizar">
    </form>
    

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nuevo_email = $_POST['nuevo_email'];
        

        $conexion = mysqli_connect("localhost", "root", "", "usuario_db");
        

         if ($id === '' || $nuevo_email === '') {
            echo "<p>Error: El ID y el email son obligatorios</p>";
        } else {
            $sql = "UPDATE usuarios SET email = '$nuevo_email' WHERE id = $id";
            
            if (mysqli_query($conexion, $sql)) {
                if (mysqli_affected_rows($conexion) > 0) {
                    echo "<p>Email actualizado correctamente</p>";
                } else {
                    echo "<p>No se encontró usuario con ese ID</p>";
                }
            } else {
                echo "<p>Error: " . mysqli_error($conexion) . "</p>";
            }
        }
        
        mysqli_close($conexion);
    }
    ?>
    
    <br><br>
    <a href="ej2.php">Ver lista de usuarios</a><br><br>
    <a href="ej1.html">Registrar nuevo usuario</a>
</body>
</html>