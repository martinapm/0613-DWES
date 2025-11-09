<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hora Actual</title>
</head>
<body>
<?php
$hora = date("H");
if($hora < 12){
    echo "Buenos días";
}else if($hora < 20){
    echo "Buenas tardes";
}else{
    echo "Buenas noches";
}
?>

</body>
</html>