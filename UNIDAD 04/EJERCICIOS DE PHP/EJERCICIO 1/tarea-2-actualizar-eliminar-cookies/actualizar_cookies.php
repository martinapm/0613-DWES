<?php

function contieneCaracteresControl($str) {

return preg_match('/[\x00-\x1F\x7F]/', $str) === 1;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$nuevoValor = $_POST['usuario'] ?? '';


if (contieneCaracteresControl($nuevoValor)) {
$error = "El valor contiene caracteres de control no permitidos.";
} else {

$caducidad = time() + (7 * 24 * 60 * 60);
setcookie('usuario', $nuevoValor, $caducidad, '/');
$mensaje = "Cookie actualizada correctamente.";
}

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizar Cookie</title>
</head>
<body>
<h1>Actualizar cookie "usuario"</h1>


<?php if (!empty($error)): ?>
<p style="color:red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>


<?php if (!empty($mensaje)): ?>
<p style="color:green;"><?= htmlspecialchars($mensaje) ?></p>
<?php endif; ?>


<form method="POST">
<label>Nuevo valor:</label>
<input type="text" name="usuario" required>
<button type="submit">Actualizar</button>
</form>


<a href="leer_cookie.php">Volver a leer cookie</a>
</body>
</html>