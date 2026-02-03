<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador de libros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .contenedor {
            width: 600px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            padding: 5px;
            border-bottom: 1px solid #ddd;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function validarTexto(e) {
            let tecla = e.key;
            let regex = /^[a-zA-Z\s]$/;

            if (!regex.test(tecla)) {
                e.preventDefault();
            }
        }
    </script>
</head>

<body>

<div class="contenedor">
    <h2>Buscar libros</h2>
    <form>
        <input type="text"
               id="texto"
               placeholder="Introduce letras del título"
               onkeypress="validarTexto(event)">
    </form>

    <ul id="resultado"></ul>
</div>
<script>
$(document).ready(function () {

    $("#texto").on("keyup", function () {

        let texto = $(this).val();

        $.ajax({
            url: "http://localhost/tarea08/api.php",
            type: "GET",
            data: {
                action: "buscar_libros",
                texto: texto
            },
            dataType: "json",
            success: function (data) {

                $("#resultado").html("");

                if (data && data.length > 0) {
                    $.each(data, function (i, libro) {
                        $("#resultado").append(
                            "<li>" + libro.titulo + "</li>"
                        );
                    });
                }
            }
        });
    });

});
</script>

</body>
</html>