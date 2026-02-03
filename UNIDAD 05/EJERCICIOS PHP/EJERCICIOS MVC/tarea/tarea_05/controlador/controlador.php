<?php

if (!defined('CON_CONTROLADOR')) {
    die('Error: No se puede acceder a este archivo directamente.');
}

/**
 * Clase Controlador
 * 
 * Controlador principal que gestiona la lógica de negocio del catálogo de artículos.
 * Se comunica con el modelo para obtener los datos y controla el flujo de la aplicación.
 */
class Controlador {
    /**
     * @var Modelo $modelo Instancia de la clase Modelo para acceder a los datos
     */
    private $modelo;

    /**
     * Constructor de la clase Controlador
     * 
     * Inicializa una nueva instancia del modelo para acceder a los datos.
     */
    public function __construct() {
        $this->modelo = new Modelo();
    }

    /**
     * Lista todos los artículos del catálogo
     * 
     * @return array Array con todos los artículos disponibles
     */
    public function listar() {
        return $this->modelo->obtenerTodos();
    }

    /**
     * Obtiene el detalle de un artículo específico
     * 
     * @param int $id Identificador del artículo a mostrar
     * @return array|null Array con los datos del artículo si existe, null si no existe
     */
    public function detalle($id) {
        return $this->modelo->obtenerPorId($id);
    }
}

/**
 * Clase ControladorSugerencias
 * 
 * Gestiona las sugerencias enviadas por los usuarios.
 * Almacena los datos en sesión (memoria) sin persistencia en base de datos.
 */
class ControladorSugerencias {
    /**
     * @var array $sugerencias Array con las sugerencias recibidas
     */
    private $sugerencias = [];

    /**
     * Constructor de la clase ControladorSugerencias
     * 
     * Inicializa el array de sugerencias en la sesión si no existe.
     */
    public function __construct() {
        if (!isset($_SESSION['sugerencias'])) {
            $_SESSION['sugerencias'] = [];
        }
    }

    /**
     * Guarda una nueva sugerencia en la sesión
     * 
     * @param array $datos Array asociativo con los datos de la sugerencia (nombre, email, mensaje)
     * @return void
     */
    public function guardarSugerencia($datos) {
        $sugerencia = [
            'nombre' => $datos['nombre'] ?? '',
            'email' => $datos['email'] ?? '',
            'mensaje' => $datos['mensaje'] ?? '',
            'fecha' => date('d/m/Y H:i')
        ];
        $_SESSION['sugerencias'][] = $sugerencia;
    }

    /**
     * Obtiene todas las sugerencias almacenadas en sesión
     * 
     * @return array Array con todas las sugerencias recibidas
     */
    public function obtenerSugerencias() {
        return isset($_SESSION['sugerencias']) ? $_SESSION['sugerencias'] : [];
    }
}

/**
 * Clase ControladorRegistro
 * 
 * Gestiona el registro de nuevos usuarios.
 * Almacena los datos en sesión (memoria) sin persistencia en base de datos.
 */
class ControladorRegistro {

    /**
     * Constructor de la clase ControladorRegistro
     * 
     * Inicializa el array de usuarios en la sesión si no existe.
     */
    public function __construct() {
        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = [];
        }
    }

    /**
     * Guarda un nuevo usuario en la sesión
     * 
     * @param array $datos Array asociativo con los datos del usuario (nombre, email, usuario)
     * @return void
     */
    public function guardarUsuario($datos) {
        $usuario = [
            'nombre' => $datos['nombre'] ?? '',
            'email' => $datos['email'] ?? '',
            'usuario' => $datos['usuario'] ?? '',
            'fecha_registro' => date('d/m/Y H:i')
        ];
        $_SESSION['usuarios'][] = $usuario;
        $_SESSION['registro_exitoso'] = true;
    }
}
?>
