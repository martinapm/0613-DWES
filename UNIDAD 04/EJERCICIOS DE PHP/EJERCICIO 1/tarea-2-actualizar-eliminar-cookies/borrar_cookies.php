<?php
setcookie('usuario', '', time() - 3600, '/');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Borrar Cookie</title>
</head>
<body>
<h1>Cookie "usuario" borrada</h1>
<p>La cookie ha sido eliminada usando expiración en el pasado.</p>
<a href="leer_cookie.php">Volver a leer cookie</a>
</body>
</html>