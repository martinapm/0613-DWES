<?php
session_start();
if (!isset($_SESSION['inicio'])) {
    $_SESSION['inicio'] = date("d/m/Y H:i:s");
    echo "<h3>Sesión iniciada el: " . $_SESSION['inicio'] . "</h3>";
} else {
    echo "<h3>La sesión sigue activa desde: " . $_SESSION['inicio'] . "</h3>";
}
?>   