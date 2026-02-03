<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>

<p id="p1">Primer párrafo</p>
<p id="p2">Segundo párrafo</p>
<p>Tercer párrafo</p>

<button onclick="insertarParrafo()">Insertar párrafo</button>

<script>
function insertarParrafo() {
    let nuevo = document.createElement("p");
    nuevo.innerText = "Nuevo párrafo";

    let segundo = document.getElementById("p2");
    document.body.insertBefore(nuevo, segundo);
}
</script>

</body>
</html>