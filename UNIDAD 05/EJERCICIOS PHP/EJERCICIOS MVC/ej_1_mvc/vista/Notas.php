<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Notas</h1>
    <ul>
        <?php foreach ($notas as $nota) : ?>
            <li>
                <?php echo htmlspecialchars($nota['contenido']); ?>
                <a href="?action=dekete&id=<?php echo $nota['id']; ?>">Eliminar</a>
        </li>
        <?php endforeach;?>
        </ul>
        
        <h2>Añadir Nota</h2>
        <form method="POST" action="?action=add">
            <input type="text" name="content" placeholder="Nueva nota" required>
            <button type="submit">Añadir</button>
        </form>
</body>
</html>