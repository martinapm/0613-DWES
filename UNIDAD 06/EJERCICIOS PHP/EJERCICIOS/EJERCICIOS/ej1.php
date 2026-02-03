<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $conexion = mysqli_connect("localhost", "root", "");
    
    mysqli_select_db($conexion, "usuario_db");
    

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    if (empty($email)) {
        echo "Error: El email es obligatorio<br>";
    } else {
        $password_encriptada = password_hash($password, PASSWORD_DEFAULT);
        
        $sql_insert = "INSERT INTO usuarios (nombre, email, Contraseña) 
                      VALUES ('$nombre', '$email', '$password_encriptada')";
        
        if (mysqli_query($conexion, $sql_insert)) {
            echo "Usuario registrado correctamente<br>";
        } else {
            echo "Error al registrar: " . mysqli_error($conexion) . "<br>";
        }
    }
    

    mysqli_close($conexion);
    

    echo "<br><br><a href='ej1.html'>Registrar otro</a><br><br>";
    echo "<a href='ej2.php'>Ver lista de usuarios</a>";
    
} else {
    echo "Error: Debes enviar el formulario primero<br>";
    echo "<a href='ej1.html'>Ir al formulario</a>";
}
?>