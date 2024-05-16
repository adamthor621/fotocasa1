<?php
include 'class.database.php';
class PaginaController extends BaseController {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        // Lógica de la página
        $this->cookieController->setCookie(obtenerNombreDeUsuarioDesdeBaseDeDatos());
    }

    // Otros métodos del controlador de esta página
}
class Registro {
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->connection = new mysqli($host, $username, $password, $database);

        if ($this->connection->connect_error) {
            die("Error de conexión: " . $this->connection->connect_error);
        }
    }

    public function registrarUsuario($nombre, $email, $contraseña) {
        $contrasenya_encriptada = md5($contraseña);

        // Preparar la consulta SQL para insertar datos en la tabla de usuarios
        $sql_insert = "INSERT INTO usuarios (nombre, email, contrasenya) VALUES ('$nombre', '$email', '$contrasenya_encriptada')";

        // Ejecutar la consulta SQL
        if ($this->connection->query($sql_insert) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function cerrarConexion() {
        $this->connection->close();
    }
}
?>
