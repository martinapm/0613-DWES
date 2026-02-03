<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>

<p id="parrafo">Este es un párrafo</p>
<button onclick="cambiarEstilo()">Cambiar estilo</button>

<script>
function cambiarEstilo() {
    let p = document.getElementById("parrafo");
    p.style.color = "white";
    p.style.backgroundColor = "black";
}
</script>

</body>
</html>