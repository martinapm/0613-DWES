<?php
$valor = $_COOKIE["usuario"] ?? null;
$expDate = null;


if (isset($_SERVER['HTTP_COOKIE'])) {

$expDate = "No se puede determinar";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tarea 1 — Cookie básica</title>
</head>
<body>
<h1>Lectura de la cookie "usuario"</h1>


<?php if ($valor): ?>
<p><strong>Valor:</strong> <?= htmlspecialchars($valor) ?></p>
<p><strong>Fecha estimada de expiración:</strong> <?= $expDate ?></p>
<?php else: ?>
<p>No hay cookie</p>
<?php endif; ?>


<a href="set_cookie.php">Volver a establecer cookie</a>
</body>
</html>