<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>3 Números</title>
</head>
<body>
    <?php
    $num1 = 9;
    $num2 = 5;
    $num3 = 15;

    if($num1 > $num2 && $num1 > $num3){
        echo "El mayor es: $num1";
    } else if ($num2 > $num1 && $num2 > $num3){
        echo "El mayor es: $num2";
    }else {
        echo "El mayor es: $num3";
    }
    
    ?>

</body>
</html>
