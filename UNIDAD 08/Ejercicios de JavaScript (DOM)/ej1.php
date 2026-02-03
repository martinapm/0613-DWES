<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>

<h1 id="titulo">Bienvenido</h1>
<button onclick="cambiarTexto()">Cambiar texto</button>

<script>
function cambiarTexto() {
    document.getElementById("titulo").innerText = "Hola, usuario";
}
</script>

</body>
</html>