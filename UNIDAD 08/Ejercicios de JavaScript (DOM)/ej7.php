<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 7</title>
</head>
<body>

<p id="contador">0</p>
<button onclick="incrementar()">Incrementar</button>

<script>
let numero = 0;

function incrementar() {
    numero++;
    document.getElementById("contador").innerText = numero;
}
</script>

</body>
</html>