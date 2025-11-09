<?php
session_start();

// Array productos
$productos = [
    1 => ["nombre" => "Camisa", "precio" => 20],
    2 => ["nombre" => "Pantalón", "precio" => 35],
    3 => ["nombre" => "Zapatos", "precio" => 50],
];

// Recupera el carrito desde la sesión o lo deja como array vacío si no existe
$carrito = $_SESSION['carrito'] ?? [];

// Elimina producto por el índice
if (isset($_GET['eliminar'])) {
    $index = $_GET['eliminar'];
    unset($carrito[$index]);
    $_SESSION['carrito'] = array_values($carrito);
    header("Location: carritos.php");
    exit;
}

// Vacia el carrito
if (isset($_GET['vaciar'])) {
    unset($_SESSION['carrito']);
    header("Location: carritos.php");
    exit;
}

$total = 0;

?>

<h2>Carrito de compras</h2>

<?php if (empty($carrito)): ?>
    <p>El carrito está vacío.</p>
<?php else: ?>
    <ul>
    <?php foreach ($carrito as $index => $id): 
        $total += $productos[$id]['precio'];
    ?>
        <li>
            <?= $productos[$id]['nombre'] ?> - <?= $productos[$id]['precio'] ?> €
            <a href="carritos.php?eliminar=<?= $index ?>">Eliminar</a>
        </li>
    <?php endforeach; ?>
    </ul>

    <h3>Total: <?= $total ?> €</h3>

    <a href="carritos.php?vaciar=1">Vaciar carrito</a>
<?php endif; ?>

<br><br>
<a href="productos.php">Volver a productos</a>
