<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mes</title>
</head>
<body>
<?php   
$mes = "Marzo";

    switch($mes){
        case "Enero";
case "Enero":
    case "Marzo":
    case "Mayo":
    case "Julio":
    case "Agosto":
    case "Octubre":
    case "Diciembre":
        echo "El mes de $mes tiene 31 días.";
        break;

    case "Febrero":
        echo "El mes de $mes tiene 28 días.";
        break;

    case "Abril":
    case "Junio":
    case "Septiembre":
    case "Noviembre":
        echo "El mes de $mes tiene 30 días.";
        break;

        default:
        echo "Mes no válido. Escribe el mes con la primera letra en mayúscula.";

    }

    ?>
</body>
</html>