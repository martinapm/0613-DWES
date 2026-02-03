<?php
/**
 * API REST para la gestión de autores y libros
 * Devuelve los datos en formato JSON
 */

require_once "./Libros.php";

/**
 * Objeto de acceso a datos
 * @var Libros
 */
$librosBD = new Libros();

/**
 * Conexión a la base de datos
 * @var PDO|null
 */
$con = $librosBD->conexion("localhost", "Libros", "root", "");

/**
 * Devuelve el listado completo de autores
 *
 * @return array|null Lista de autores o null en caso de error
 */
function get_listado_autores() {
    global $librosBD, $con;
    return $librosBD->consultarAutores($con);
}

/**
 * Devuelve los datos de un autor y sus libros
 *
 * @param int $id Identificador del autor
 * @return object|null Objeto con datos del autor y libros o null en caso de error
 */
function get_datos_autor($id) {
    global $librosBD, $con;

    $autor = $librosBD->consultarAutores($con, $id);
    $libros = $librosBD->consultarLibros($con, $id);

    if ($autor == null) return null;

    $info = new stdClass();
    $info->datos = (object)$autor[0];
    $info->libros = [];

    foreach ($libros as $l) {
        $obj = new stdClass();
        $obj->id = $l["id"];
        $obj->titulo = $l["titulo"];
        $obj->f_publicacion = $l["f_publicacion"];
        $info->libros[] = $obj;
    }

    return $info;
}

/**
 * Devuelve el listado de libros (id y título)
 *
 * @return array|null Lista de libros o null en caso de error
 */
function get_listado_libros() {
    global $librosBD, $con;

    $libros = $librosBD->consultarLibros($con);
    $resultado = [];

    foreach ($libros as $l) {
        $obj = new stdClass();
        $obj->id = $l["id"];
        $obj->titulo = $l["titulo"];
        $resultado[] = $obj;
    }

    return $resultado;
}

/**
 * Devuelve los datos de un libro y su autor
 *
 * @param int $id Identificador del libro
 * @return object|null Objeto con datos del libro y autor o null en caso de error
 */
function get_datos_libro($id) {
    global $librosBD, $con;

    $libro = $librosBD->consultarDatosLibro($con, $id);
    if ($libro == null) return null;

    $autor = $librosBD->consultarAutores($con, $libro["id_autor"]);

    $info = new stdClass();
    $info->titulo = $libro["titulo"];
    $info->f_publicacion = $libro["f_publicacion"];
    $info->id_autor = $libro["id_autor"];
    $info->nombre = $autor[0]["nombre"];
    $info->apellidos = $autor[0]["apellidos"];

    return $info;
}

/**
 * Acciones permitidas en la API
 * @var array
 */
$posibles_URL = array(
    "get_listado_autores",
    "get_datos_autor",
    "get_listado_libros",
    "get_datos_libro"
);

$valor = "Ha ocurrido un error";

/**
 * Controlador de peticiones de la API
 */
if (isset($_GET["action"]) && in_array($_GET["action"], $posibles_URL)) {
    switch ($_GET["action"]) {
        case "get_listado_autores":
            $valor = get_listado_autores();
            break;

        case "get_datos_autor":
            if (isset($_GET["id"]))
                $valor = get_datos_autor($_GET["id"]);
            else
                $valor = "Argumento no encontrado";
            break;

        case "get_listado_libros":
            $valor = get_listado_libros();
            break;

        case "get_datos_libro":
            if (isset($_GET["id"]))
                $valor = get_datos_libro($_GET["id"]);
            else
                $valor = "Argumento no encontrado";
            break;
    }
}

// Devolvemos los datos serializados en JSON
exit(json_encode($valor));