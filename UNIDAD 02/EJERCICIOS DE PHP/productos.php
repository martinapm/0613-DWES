<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3: Mostrar una lista de productos</title>
</head>
<body>
    
    <h1>Ejercicio 3 </h1>

<ul>
    <?php

        $productos = ["Manzanas", "Peras", "Naranjas"];
        foreach($productos as $producto) {
        echo "<li>$producto</li>";
        }
    ?>
     </ul>

</body>
</html>