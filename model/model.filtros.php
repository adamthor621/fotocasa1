<?php
include 'class.database.php';

class ConexionBD {
    private $servername = "localhost";
    private $username = "iestacio";
    private $password = "iestacio";
    private $dbname = "fotocasa";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }

    public function obtenerProvincias() {
        $sql_provincias = "SELECT * FROM provincias";
        return $this->conn->query($sql_provincias);
    }

    public function obtenerTiposPisos() {
        $sql_tipos_pisos = "SELECT * FROM tipo_pisos";
        return $this->conn->query($sql_tipos_pisos);
    }

    public function obtenerExtras() {
        $sql_extras = "SELECT * FROM extras";
        return $this->conn->query($sql_extras);
    }

    public function filtrarPisos($sql_filtros) {
        return $this->conn->query($sql_filtros);
    }

    public function cerrarConexion() {
        $this->conn->close();
    }
}
class FiltrosModel {
    private $conexion;

    public function __construct(ConexionBD $conexion) {
        $this->conexion = $conexion;
    }

    public function filtrarPisos($provincia, $tipo_vivienda, $extras, $banos) {
        $sql_filtros = "SELECT * FROM pisos WHERE 1";
        if ($provincia !== '') {
            $sql_filtros .= " AND provincia_id = ?";
        }
        if ($tipo_vivienda !== '') {
            $sql_filtros .= " AND tipo_vivienda_id = ?";
        }
        if ($extras !== '') {
            $sql_filtros .= " AND extras_id = ?";
        }
        if ($banos !== '') {
            $sql_filtros .= " AND banos = ?";
        }

        $stmt = $this->conexion->prepare($sql_filtros);
        if ($stmt === false) {
            die("Error en la consulta: " . $this->conexion->error);
        }

        if ($provincia !== '') {
            $stmt->bind_param("i", $provincia);
        }
        if ($tipo_vivienda !== '') {
            $stmt->bind_param("i", $tipo_vivienda);
        }
        if ($extras !== '') {
            $stmt->bind_param("i", $extras);
        }
        if ($banos !== '') {
            $stmt->bind_param("i", $banos);
        }

        $stmt->execute();
        $result_filtros = $stmt->get_result();
        return $result_filtros;
    }
}
include './view/view.filtros.php';