<?php
require_once 'Libros.php';


$libros = new Libros();

$conexion = $libros->conexion('localhost', 'libros', 'root', '');

$autores = $libros->consultarAutores($conexion);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Libros por Autor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .autor-container {
            background-color: white;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .autor-titulo {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .autor-titulo h2 {
            margin: 0;
            font-size: 24px;
        }
        .libros-list {
            margin-left: 20px;
        }
        .libro {
            background-color: #f9f9f9;
            padding: 10px 15px;
            margin-bottom: 10px;
            border-left: 4px solid #2196F3;
        }
        .libro-titulo {
            font-weight: bold;
            color: #2196F3;
            font-size: 16px;
        }
        .libro-fecha {
            color: #666;
            font-size: 14px;
            margin-top: 5px;
        }
        .sin-libros {
            color: #999;
            font-style: italic;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Catálogo de Libros por Autor</h1>

    <?php
    if (empty($autores)) {
        echo '<p style="text-align: center; color: #999;">No hay autores registrados.</p>';
    } else {
        foreach ($autores as $autor) {
            echo '<div class="autor-container">';
            
            // Mostrar datos del autor
            echo '<div class="autor-titulo">';
            echo '<h2>' . htmlspecialchars($autor['nombre'] ?? 'Sin nombre') . '</h2>';
            if (isset($autor['id'])) {
                echo '<p style="margin: 5px 0; opacity: 0.9;">ID: ' . htmlspecialchars($autor['id']) . '</p>';
            }
            echo '</div>';
            
            // Obtener libros del autor
            $librosAutor = $libros->consultarLibros($conexion, $autor['id']);
            
            if ($librosAutor === null || empty($librosAutor)) {
                echo '<div class="sin-libros">No hay libros publicados por este autor.</div>';
            } else {
                echo '<div class="libros-list">';
                echo '<h3>Libros publicados:</h3>';
                
                foreach ($librosAutor as $libro) {
                    echo '<div class="libro">';
                    echo '<div class="libro-titulo">' . htmlspecialchars($libro['titulo'] ?? 'Sin título') . '</div>';
                    if (isset($libro['f_publicacion'])) {
                        echo '<div class="libro-fecha">Publicado: ' . htmlspecialchars($libro['f_publicacion']) . '</div>';
                    }
                    echo '</div>';
                }
                
                echo '</div>';
            }
            
            echo '</div>';
        }
    }
    ?>

</body>
</html>
