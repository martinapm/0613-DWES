<?php
$lang = $_COOKIE['lang'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Selector de idioma</title>
</head>
<body>
<?php if ($lang === 'es'): ?>
<h1>Bienvenido</h1>
<p>Este es un ejemplo sencillo de selección de idioma.</p>
<p>Has elegido español.</p>
<a href="reset_lang.php">Restablecer idioma</a>


<?php elseif ($lang === 'en'): ?>
<h1>Welcome</h1>
<p>This is a simple language selection example.</p>
<p>You have chosen English.</p>
<a href="reset_lang.php">Reset language</a>


<?php else: ?>
<h1>Seleccionar idioma</h1>
<form method="POST" action="set_lang.php">
<label for="lang">Elige idioma:</label>
<select name="lang" id="lang">
<option value="es">Español</option>
<option value="en">English</option>
</select>
<button type="submit">Guardar</button>
</form>
<?php endif; ?>
</body>
</html>