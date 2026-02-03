<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>

<ul id="tareas">
    <li>Tarea 1</li>
    <li>Tarea 2</li>
    <li>Tarea 3</li>
</ul>

<button onclick="eliminarTarea()">Eliminar última tarea</button>

<script>
function eliminarTarea() {
    let lista = document.getElementById("tareas");
    if (lista.lastElementChild) {
        lista.removeChild(lista.lastElementChild);
    }
}
</script>

</body>
</html>