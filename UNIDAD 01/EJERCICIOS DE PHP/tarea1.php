<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarea 1</title>
</head>
<body>
    <header>
        <h1>Prueba de XAMPP</h1>
    </header>

    <main>
        <p>Nombre: Martina Pérez Muñoz</p>
        <p>NIF: 78003602E</p>

        <?php
        echo "Servidor: " . $_SERVER["SERVER_SOFTWARE"] . "<br>";
        echo "Raíz: " . $_SERVER["DOCUMENT_ROOT"] . "<br>";
        ?>

    </main>

    <footer>
        <p>Prueba de servidor - 2025</p>
    </footer>
</body>
</html>
