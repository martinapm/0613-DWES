<?php
/**
 * @param string $nombre Nombre del Pokémon
 * @return array|null Devuelve los datos del Pokémon o null si hay error
 */

function obtenerPokemon($nombre) {
    $url = "https://pokeapi.co/api/v2/pokemon/" . strtolower($nombre);

    $respuesta = @file_get_contents($url);

    if ($respuesta === FALSE) {
        return null;
    }

    return json_decode($respuesta, true);
}

$nombre = $_GET['pokemon'] ?? 'pikachu';
$datos = obtenerPokemon($nombre);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>API Pokémon - RA8_f</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Pokédex Web</h1>

<form method="GET">
    <input type="text" name="pokemon" placeholder="Introduce un Pokémon" required>
    <button type="submit">Buscar</button>
</form>

<?php if ($datos): ?>

<div class="card">
    <img src="<?php echo $datos['sprites']['front_default']; ?>" alt="Pokemon">

    <p><strong>Nombre:</strong> <?php echo ucfirst($datos['name']); ?></p>
    <p><strong>Altura:</strong> <?php echo $datos['height']; ?></p>
    <p><strong>Peso:</strong> <?php echo $datos['weight']; ?></p>

    <p><strong>Tipos:</strong></p>
    <ul>
        <?php foreach ($datos['types'] as $tipo): ?>
            <li><?php echo $tipo['type']['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php else: ?>

<div class="card">
    <p>Pokémon no encontrado</p>
</div>

<?php endif; ?>

</body>
</html>