<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
</head>
<body>

    <h1>Productos</h1>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Precio con 10% descuento</th>
        </tr>

        <?php foreach ($productos as $producto) : ?>
            <tr>
                <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                <td><?php echo $producto['precio']; ?> €</td>
                <td><?php echo number_format($producto['precio'] * 0.9, 2); ?> €</td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Añadir producto</h2>

    <form method="post" action="?action=add">
        <input type="text" name="nombre" placeholder="Nombre producto" required>
        <input type="number" step="0.01" name="precio" placeholder="Precio" required>
        <button type="submit">Añadir</button>
    </form>

</body>
</html>
