<?php
require 'catalog.php';

$cart = [];

if (isset($_COOKIE['cart'])) {
    $json = $_COOKIE['cart'];
    $decoded = json_decode($json, true);
    if (is_array($decoded)) {
        $cart = $decoded;
    }
}

if (isset($_GET['add'])) {
    $id = (int) $_GET['add'];
    if (!isset($cart[$id])) {
        $cart[$id] = 1;
    } else {
        $cart[$id]++;
    }
}

if (isset($_GET['remove'])) {
    $id = (int) $_GET['remove'];
    if (isset($cart[$id])) {
        $cart[$id]--;
        if ($cart[$id] <= 0) {
            unset($cart[$id]);
        }
    }
}

$cartJson = json_encode($cart);
$size = strlen($cartJson);

$limit = 4096;

if ($size > 3000) {
    $warning = "El carrito supera el límite de almacenamiento en cookie. Por favor, inicia sesión para guardarlo en el servidor.";
} else {
    setcookie('cart', $cartJson, time() + 86400, '/');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito</title>
</head>
<body>
<h1>Catálogo</h1>
<ul>
<?php foreach ($products as $p): ?>
    <li>
        <?= htmlspecialchars($p['name']) ?> - <?= $p['price'] ?> €
        <a href="cart.php?add=<?= $p['id'] ?>">Añadir</a>
    </li>
<?php endforeach; ?>
</ul>

<h2>Carrito actual</h2>
<?php if (!empty($warning)): ?>
    <p style="color:red; font-weight:bold;"> verdadero
        <?= $warning ?></p>
<?php endif; ?>

<?php if (empty($cart)): ?>
    <p>Carrito vacío</p>
<?php else: ?>
    <ul>
        <?php foreach ($cart as $id => $qty): ?>
            <li>
                Producto ID <?= $id ?> — Cantidad: <?= $qty ?>
                <a href="cart.php?remove=<?= $id ?>">Quitar uno</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="mostrar_carrito.php">Ver total</a>
<?php endif; 
?>
</body>
</html>