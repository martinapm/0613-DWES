<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Votación</title>
</head>
<body>
<?php
$votos = [0, 0, 0]; 

$votos[0]++; 
$votos[2]++; 
$votos[1]++; 
$votos[0]++; 

echo "Candidato A: $votos[0]<br>";
echo "Candidato B: $votos[1]<br>";
echo "Candidato C: $votos[2]<br>";
?>

</body>
</html>