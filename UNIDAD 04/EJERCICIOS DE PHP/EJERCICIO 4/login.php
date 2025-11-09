<?php
// muestra el mensaje si la sesión expiró
if (isset($_GET['expirado'])) {
    echo "<p style='color:red;'>La sesión ha expirado por inactividad.</p>";
}
?>
