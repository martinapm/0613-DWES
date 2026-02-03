<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>

<button onclick="agregarTarjeta()">Agregar tarjeta</button>

<div id="contenedor"></div>

<script>
function agregarTarjeta() {
    let tarjeta = document.createElement("div");

    let h3 = document.createElement("h3");
    h3.innerText = "Título de la tarjeta";

    let p = document.createElement("p");
    p.innerText = "Este es un texto fijo.";

    tarjeta.appendChild(h3);
    tarjeta.appendChild(p);

    document.getElementById("contenedor").appendChild(tarjeta);
}
</script>

</body>
</html>