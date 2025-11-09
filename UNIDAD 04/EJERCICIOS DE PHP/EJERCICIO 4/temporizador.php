<?php

session_start();

 //300 sg = 5 min
$tiempo_limite = 10; 


    //verificación de la variable 'ultimoAcceso'
if (isset($_SESSION['ultimoAcceso'])) {

    // Cálculo de cuanto tiempo ha pasado de la última acción
    $inactividad = time() - $_SESSION['ultimoAcceso'];


    if ($inactividad > $tiempo_limite) {

        // Destrucción total
        session_unset();
        session_destroy();

        // Redirección al login
        header("Location: login.php?expirado=1");
        exit;
    }
}


//Actualiza el tiempo del último acceso
$_SESSION['ultimoAcceso'] = time();

?>
<h2>Página protegida</h2>
<p>Bienvenido. La sesión está activa.</p>
<p>Si no haces nada durante 5 minutos, esta sesión se cerrará de forma automática.</p>
