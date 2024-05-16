<?php
include('class.tipo_pisos.php');

class InmueblesController {
    public function listar() {
        $model = new InmueblesTipo();
        $inmuebles = $model->llista();
        return $inmuebles;
    }
}

$controller = new InmueblesController();
$inmuebles = $controller->listar();
include("vista.modelo_tipo.php");
?>
