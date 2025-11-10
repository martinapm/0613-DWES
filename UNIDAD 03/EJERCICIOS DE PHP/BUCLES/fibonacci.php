<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Serie Fibonacci</title>
</head>
<body>
<?php
$i = 0;
$y = 1;

echo "Serie Fibonacci<br>";

for ($i = 1; $i <= 15; $i++){
    echo $i . " ";
  
    
    $resultado = $i + $y;
    $i = $y;
    $y = $resultado;

}

?>

</body>
</html>