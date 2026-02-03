<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>

<input type="text" id="texto">
<button onclick="agregarElemento()">Agregar</button>

<ul id="lista"></ul>

<script>
function agregarElemento() {
    let texto = document.getElementById("texto").value;
    let li = document.createElement("li");
    li.innerText = texto;
    document.getElementById("lista").appendChild(li);
}
</script>

</body>
</html>