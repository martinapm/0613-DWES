<?php
require 'catalog.php';


$cart = [];
if (isset($_COOKIE['cart'])) {
$decoded = json_decode($_COOKIE['cart'], true);
if (is_array($decoded)) {
$cart = $decoded;
}
}

$total = 0;
foreach ($products as $p) {
$id = $p['id'];
if (isset($cart[$id])) {
$total += $p['price'] * $cart[$id];
}
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Total del carrito</title>
</head>
<body>
<h1>Resumen del carrito</h1>
<?php if (empty($cart)): ?>
<p>Carrito vacío</p>
<?php else: ?>
<p><strong>Total:</strong> <?= number_format($total, 2) ?> €</p>
<?php endif; ?>
<a href="cart.php">Volver al carrito</a>
</body>
</html>