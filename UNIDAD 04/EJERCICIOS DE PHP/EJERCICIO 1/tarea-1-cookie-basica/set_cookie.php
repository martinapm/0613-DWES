<?php

$valor = "alumno123";
$caducidad = time() + (7 * 24 * 60 * 60);
setcookie("usuario", $valor, $caducidad, "/");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Cookie establecida</title>
</head>
<body>
<h1>Cookie "usuario" establecida</h1>
<p>Valor: alumno123</p>
<p>Caducidad en 7 días.</p>
<a href="leer_cookie.php">Ir a leer la cookie</a>
</body>
</html>