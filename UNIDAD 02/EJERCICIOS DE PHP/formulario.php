<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4: Formulario con mensaje personalizado</title>
</head>
<body>
    <h1>Ejercicio 4 </h1>

    <form action = "formulario.php" method = "POST">
        <label>Introduce el nombre: </label>
        <input type = "text" name = "nombre" id = "nombre" required>
        <input type = "submit" value = "Enviar">
    </form>

    <?php

            if(isset($_POST['nombre'])){
                $nombre = ($_POST['nombre']);

                echo "Hola, $nombre gracias por visitar mi web.";
            }
            
?>
</body>
</html>