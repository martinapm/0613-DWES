<?php
session_start();

// Array productos
$productos = [
    1 => ["nombre" => "Camisa", "precio" => 20],
    2 => ["nombre" => "Pantalón", "precio" => 35],
    3 => ["nombre" => "Zapatos", "precio" => 50],
];

// Inicializar carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Agrega producto al carrito (botón)
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $_SESSION['carrito'][] = $id;
}
?>

<h2>Productos disponibles</h2>
<ul>
<?php foreach ($productos as $id => $producto): ?>
    <li>
        <?= $producto['nombre'] ?> - <?= $producto['precio'] ?> €
        <form method="POST" action="productos.php" style="display:inline;">
            <input type="hidden" name="id" value="<?= $id ?>">
            <button type="submit">Agregar al carrito</button>
        </form>
    </li>
<?php endforeach; ?>
</ul>

<a href="carritos.php">Ver carrito</a>
