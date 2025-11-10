<?php
session_start();

// Si se envía el formulario, guardamos el título en la sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['titulo'])) {
    $_SESSION['titulo_pagina'] = $_POST['titulo'];
}

// Si no hay título en sesión, usamos uno por defecto
$titulo = isset($_SESSION['titulo_pagina']) ? $_SESSION['titulo_pagina'] : 'Documentos';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página - 
        <?php echo htmlspecialchars($titulo); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <?php include 'nav.php'; ?>
    
    <div class="container">
        <h1><?php echo htmlspecialchars($titulo); ?></h1>
        
        <!-- Formulario para cambiar el título -->
        <div style="background-color: #e8f4f8; padding: 15px; margin: 20px 0; border-radius: 5px;">
            <h3>Cambiar título de la página</h3>
            <form method="POST" action="">
                <input type="text" name="titulo" placeholder="Escribe el nuevo título" 
                       style="padding: 8px; width: 300px; font-size: 14px;" required>
                <button type="submit" style="padding: 8px 20px; background-color: #007bff; 
                        color: white; border: none; cursor: pointer; border-radius: 4px;">
                    Cambiar Título
                </button>
            </form>
        </div>

        <h2>Documento 1</h2>
        <p>Texto del documento 1. Aquí va información relevante sobre el primer documento.</p>

        <h2>Documento 2</h2>
        <p>Texto del documento 2. Aquí va información relevante sobre el segundo documento.</p>

        <h2>Documento 3</h2>
        <p>Texto del documento 3. Aquí va información relevante sobre el tercer documento.</p>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>