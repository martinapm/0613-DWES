
<?php
function calcularAreaCirculo($radio) {
    return pi() * pow($radio, 2);
}

$radio = 5; 
$area = calcularAreaCirculo($radio);

echo "El area de un circulo con radio $radio es: $area";
?>
