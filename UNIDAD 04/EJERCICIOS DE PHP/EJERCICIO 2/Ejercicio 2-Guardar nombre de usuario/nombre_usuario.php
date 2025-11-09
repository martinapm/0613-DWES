<?php
session_start();

if(isset($_SESSION['nombre_usuario'])) {
    echo "<h3>Hola " . htmlspecialchars($_SESSION['nombre_usuario']) . ", bienvenido de nuevo.</h3>";
}else {
    if (isset($_POST['nombre_usuario']) && !empty($_POST['nombre_usuario'])) {
        $_SESSION['nombre_usuario'] = $_POST['nombre_usuario'];
        echo "<h3>Hola, " . htmlspecialchars($_SESSION['nombre_usuario']) . ", tu nombre ha sido guardado.</h3>";
    } else {
        echo '<form method="post" action="">
                <label for="nombre_usuario">Introduce tu nombre de usuario:</label>
                <input type="text" id="nombre_usuario" name="nombre_usuario" required>
                <input type="submit" value="Guardar">
              </form>';
    }
    
}