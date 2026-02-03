<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicio Web - Libros</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }
        header {
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            background-color: #555;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            background-color: white;
            padding: 20px;
            margin: 20px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<header>
    <h1>Servicio Web – Autores y Libros</h1>
</header>

<nav>
    <a href="cliente.php?action=get_listado_autores">Lista de autores</a>
    <a href="cliente.php?action=get_listado_libros">Lista de libros</a>
</nav>

<main>
    <?php
        // Carga el cliente
        if (isset($_GET["action"])) {
            include "cliente.php";
        } else {
            echo "<p>Seleccione una opción del menú para comenzar.</p>";
        }
    ?>
</main>

</body>
</html>
