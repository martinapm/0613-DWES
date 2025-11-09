<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Números del 1 al 100</title>
</head>
<body>
<?php
for ($i = 1; $i <=100; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        echo "FizzsBuzz<br>";
    }else if ($i % 3 == 0){
        echo "Fizz<br>";
    }elseif ($i % 5 == 0){
        echo "Buzz</br>";
    } else {
        echo $i . "<br>";
     }
}
?>



</body>
</html>