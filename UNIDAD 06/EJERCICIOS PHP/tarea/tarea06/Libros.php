<?php

class Libros {

    /**
     * Establece la conexión a la base de datos
     * 
     * @param string $servidor Nombre del servidor MySQL
     * @param string $bd Nombre de la base de datos
     * @param string $usuario Usuario de acceso a la base de datos
     * @param string $pass Contraseña del usuario
     * @return PDO|null Retorna objeto PDO si la conexión es exitosa, null si hay error
     */
    public function conexion($servidor, $bd, $usuario, $pass) {
        try {
            $con = new PDO(
                "mysql:host=$servidor;dbname=$bd;charset=utf8",
                $usuario,
                $pass
            );
            return $con;
        } catch (PDOException $e) {
            return null;
        }
    }

    /**
     * Consulta los autores de la base de datos
     * 
     * @param PDO $con Objeto de conexión a la base de datos
     * @param int|null $idAutor Identificador del autor a consultar (opcional)
     * @return array|null Retorna array de autores si es exitoso, null si hay error
     */
    public function consultarAutores($con, $idAutor = null) {
        try {
            if ($idAutor == null) {
                $sql = "SELECT * FROM Autor";
                $stmt = $con->prepare($sql);
            } else {
                $sql = "SELECT * FROM Autor WHERE id = ?";
                $stmt = $con->prepare($sql);
                $stmt->bindParam(1, $idAutor);
            }

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return null;
        }
    }

    /**
     * Consulta los libros de la base de datos
     * 
     * @param PDO $con Objeto de conexión a la base de datos
     * @param int|null $idAutor Identificador del autor para filtrar libros (opcional)
     * @return array|null Retorna array de libros si es exitoso, null si hay error
     */
    public function consultarLibros($con, $idAutor = null) {
        try {
            if ($idAutor == null) {
                $sql = "SELECT * FROM Libro";
                $stmt = $con->prepare($sql);
            } else {
                $sql = "SELECT * FROM Libro WHERE id_autor = ?";
                $stmt = $con->prepare($sql);
                $stmt->bindParam(1, $idAutor);
            }

            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return null;
        }
    }

    /**
     * Consulta los datos de un libro específico
     * 
     * @param PDO $con Objeto de conexión a la base de datos
     * @param int $idLibro Identificador del libro a consultar
     * @return array|null Retorna array con los datos del libro si es exitoso, null si hay error
     */
    public function consultarDatosLibro($con, $idLibro) {
        try {
            $sql = "SELECT * FROM Libro WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(1, $idLibro);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return null;
        }
    }

    /**
     * Elimina un autor de la base de datos
     * 
     * @param PDO $con Objeto de conexión a la base de datos
     * @param int $idAutor Identificador del autor a eliminar
     * @return bool Retorna verdadero si la eliminación fue exitosa, falso en caso de error
     */
    public function borrarAutor($con, $idAutor) {
        try {
            $sql = "DELETE FROM Autor WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(1, $idAutor);
            $stmt->execute();
            
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    /**
     * Elimina un libro de la base de datos
     * 
     * @param PDO $con Objeto de conexión a la base de datos
     * @param int $idLibro Identificador del libro a eliminar
     * @return bool Retorna verdadero si la eliminación fue exitosa, falso en caso de error
     */
    public function borrarLibro($con, $idLibro) {
        try {
            $sql = "DELETE FROM Libro WHERE id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(1, $idLibro);
            $stmt->execute();
            
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}

?>