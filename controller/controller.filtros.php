<?php
include 'controller/controller.cookies.php';
include './model/model.filtros.php';
include_once './view/view.filtros.php'; 

$conexion = new ConexionBD();
$filtrosModel = new FiltrosModel($conexion);

// Verificar si se han proporcionado filtros
if (!isset($_POST['filtrar'])) {
    echo "Error: No se han proporcionado filtros.";
    exit();
}

$provincia = $_POST['provincia'];
$tipo_vivienda = $_POST['tipo_vivienda'];
$extras = $_POST['extras'];
$banos = $_POST['banos'];

// Filtrar pisos
$result_filtros = $filtrosModel->filtrarPisos($provincia, $tipo_vivienda, $extras, $banos);

// Inicializar la consulta base
$sql_filtros = "SELECT * FROM pisos WHERE 1";

if (!empty($_POST['provincia'])) {
    $provincia = $_POST['provincia'];
    $sql_filtros .= " AND provincia_id = '$provincia'";
}

if (!empty($_POST['tipo_vivienda'])) {
    $tipo_vivienda = $_POST['tipo_vivienda'];
    $sql_filtros .= " AND tipo_vivienda_id = '$tipo_vivienda'";
}

if (!empty($_POST['extras'])) {
    $extras = $_POST['extras'];
    $sql_filtros .= " AND extra_id = '$extras'";
}

if (!empty($_POST['banos'])) {
    $banos = $_POST['banos'];
    $sql_filtros .= " AND banos = '$banos'";
}

if (!empty($_POST['busqueda'])) {
    $busqueda = $_POST['busqueda'];
    $sql_filtros .= " AND (titulo LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%')";
}

$result_filtros = $conexion->query($sql_filtros); // Se corrige la variable a utilizar

// Mostrar resultados
if ($result_filtros->num_rows > 0) {
    while ($row_piso = $result_filtros->fetch_assoc()) {
        echo "<div class='piso'>";
        echo "<h3>" . $row_piso["titulo"] . "</h3>";
        echo "<p>Precio: $" . $row_piso["precio"] . "</p>";
        echo "<p>Habitaciones: " . $row_piso["habitaciones"] . "</p>";
        echo "<p>Baños: " . $row_piso["banos"] . "</p>";
        echo "<p>Provincia: " . $row_piso["provincia"] . "</p>";
        echo "<p>Disponibilidad: " . $row_piso["disponibilidad"] . "</p>";
        echo "<p>Imagen: " . $row_piso["imagen_url"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No se encontraron resultados.";
}

// Manejo de cookies
setcookie("miCookie", "ejemplo", time() + 86400, "/");
if (isset($_COOKIE['miCookie'])) {
    echo "La cookie 'miCookie' ha sido creada.";
} else {
    echo "La cookie 'miCookie' no ha sido creada.";
}

$conexion->cerrarConexion();
?>
