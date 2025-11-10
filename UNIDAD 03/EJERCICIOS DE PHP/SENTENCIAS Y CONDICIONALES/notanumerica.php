<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nota Numérica</title>
</head>
<body>
<?php
$nota = 9;
if($nota < 5){
    echo "Suspenso";
}else if($nota < 7){
    echo "Aprobado";
}else if ($nota < 9){
    echo "Notable";
}else {
    echo "Sobresaliente";
}

?>



</body>
</html>