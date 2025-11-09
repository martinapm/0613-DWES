<?php
$frutas = [
    "Manzana" => 1.2,
    "Banana" => 0.8,
    "Naranja" => 1.5,
    "Pera" => 1.0
];

echo "<h2>Lista de Frutas y Precios</h2>";
echo "<ul>";
foreach ($frutas as $fruta => $precio) {
    echo "<li>$fruta: $precio €</li>";
}
echo "</ul>";
?>
