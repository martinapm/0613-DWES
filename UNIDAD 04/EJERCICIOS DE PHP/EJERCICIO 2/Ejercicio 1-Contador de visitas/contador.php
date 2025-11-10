<?php 
session_start();

if (!isset($_SESSION['visitas'])){
    $_SESSION['visitas'] = 1;
    echo "<h3>Bienvenido a su primera visita a esta página web</h3>";
} else {
    $_SESSION['visitas']++;
    echo "Has visitado esta página " . $_SESSION['visitas'] . " veces.</h3>";
}
?>