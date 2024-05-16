<?php
include_once 'model.registro.php';
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

        
        $sql_insert = "INSERT INTO usuarios (nombre, email, contrasenya) VALUES ('$nombre', '$email', '$contrasenya_encriptada')";
echo "Estoy registrando al usuari: $sql_insert";
        
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["contrasenya_encriptada"])) {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $contraseña = $_POST["contrasenya_encriptada"];

        $registro = new Registro("localhost", "iestacio", "iestacio", "fotocasa");

        
        if ($registro->registrarUsuario($nombre, $email, $contraseña)) {
            echo "Usuario registrado correctamente.";
        } else {
            echo "Error al registrar usuario.";
        }

        
        $registro->cerrarConexion();
    } else {
        echo "Faltan datos en la solicitud.";
    }
}