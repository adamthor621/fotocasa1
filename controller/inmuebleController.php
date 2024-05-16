<?php
include_once 'inmuebleModel.php';

class InmuebleController {
    public function mostrarResultados($provincia, $tipo_vivienda, $extras) {
        // Crear instancia del modelo
        $model = new InmuebleModel();

        // Obtener resultados filtrados del modelo
        $results = $model->getFilteredResults($provincia, $tipo_vivienda, $extras);

        // Incluir la vista para mostrar los resultados
        include 'inmuebleView.php';
    }
}


 $controller = new InmuebleController();
 $controller->mostrarResultados($provincia, $tipo_vivienda, $extras);
?>
