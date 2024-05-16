<?php
require_once('class.database.php');
class inmuebles_tipo{
    private $db;
    private $table;

    public function __construct() {
        $this->db=new Database();
        $this->table="inmuebles_tipo";
    }

    public function edita($id) {
        $sql="SELECT * FROM $this->table WHERE id='$id';";

        $result=$this->db->connection->query($sql);;
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function llista() {
        $sql="SELECT * FROM $this->table ORDER BY id ASC;";
        
        $result = $this->db->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function insertar($datos){
        // $datos es un array cuyas keys son el nombre de la columnas de la tabla y los valores el valor a insereix para esa columna.
        $nombre=$this->db->connection->real_escape_string($datos['nombre']);
        
        $sql="INSERT INTO $this->table (id, nombre, visible) VALUES (NULL, '$nombre', '1');";
        if ($this->db->connection->query($sql) === TRUE) {
            return $this->db->connection->insert_id;    //...se ha insereixdo el registro con id insert_id
        } else {
            return 0;                       //...no se ha insereixdo ningún registro
        }
    }

    function modifica($datos, $id){
        // $datos es un array cuyas keys son el nombre de la columnas de la tabla y los valores el valor a insereix para esa columna.
        // $id es el valor del campo id de la tabla $this->table
        //$nombre=$this->db->connection->real_escape_string($datos['nombre']);
        $nombre=$datos['nombre'];
        $sql="UPDATE $this->table SET nombre='$nombre' WHERE id=''$id;";
        return ($this->db->connection->query($sql) === TRUE);       //...devuelve true o false si se ha actualizado con éxito
    }
}