<?php
require_once('class.database.php');

class InmueblesTipo {
    private $db;
    private $table;

    public function __construct() {
        $this->db = new connection(); // Ajusta la conexión a la base de datos según tu configuración
        $this->table = "tipo_pisos";
    }

    public function edita($id) {
        $sql = "SELECT * FROM $this->table WHERE codigo_tipo = ?";
        $query= $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function llista() {
        $sql = "SELECT * FROM $this->table ORDER BY codigo_tipo ASC";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function insertar($datos) {
        $tipo = $this->db->real_escape_string($datos['tipo']);
        $sql = "INSERT INTO $this->table (codigo_tipo, tipo) VALUES (NULL, ?)";
        $query= $this->db->prepare($sql);
        $stmt->bind_param("s", $tipo);
        
        if ($stmt->execute()) {
            return $this->db->insert_id;
        } else {
            return 0;
        }
    }

    function modifica($datos, $id) {
        $tipo = $this->db->real_escape_string($datos['tipo']);
        $sql = "UPDATE $this->table SET tipo = ? WHERE codigo_tipo = ?";
        $query= $this->db->prepare($sql);
        $stmt->bind_param("si", $tipo, $id);
        
        return ($stmt->execute());
    }
}
?>