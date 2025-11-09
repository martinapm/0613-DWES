<?php
  // comprobación del formulario
if (isset($_POST['modo'])) {
    // guarda una variable la opción enviada por el usuario
    $modo = $_POST['modo'];

    // creación de la cookie que dura 7 días
    setcookie("preferencia_modo", $modo, time() + (60 * 60 * 24 * 7));


    $mensaje = "El modo '$modo' se ha aplicado perfectamente.";
}

// si la cookie no existe usamos el modo claro por defecto
$modo_actual = $_COOKIE['preferencia_modo'] ?? "claro"; 



if ($modo_actual === "oscuro") {
    $fondo = "#222";   
    $texto = "#fff";    
} else {
    $fondo = "#fff";   
    $texto = "#000";    
}
?>

<!-- aplicamos el estilo de la página por las cookies -->
<body style="background: <?= $fondo ?>; color: <?= $texto ?>; font-family: Alta;">

<h2>Preferencias de visualización</h2>

<!-- muestra mensaje si existe -->
<?php if (isset($mensaje)): ?>
    <p><strong><?= $mensaje ?></strong></p>
<?php endif; ?>


<form method="POST">

    <label>Selecciona el modo:</label><br><br>

    <!-- input modo claro -->
    <input type="radio" name="modo" value="claro" <?= $modo_actual == "claro" ? "checked" : "" ?>>
    Claro<br>

    <!-- input modo oscuro -->
    <input type="radio" name="modo" value="oscuro" <?= $modo_actual == "oscuro" ? "checked" : "" ?>>
    Oscuro<br><br>

    <button type="submit">Guardar</button>
</form>

</body>

"me pasa un error y es que cuando elijo un modo, le tengo que dar dos veces al botón para que se me actualice y se cambie el fondo, porque pasa eso?"