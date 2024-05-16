
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de Pisos</title>
    <link rel="icon" type="image/jpg" href="assets/img/icono.ico">
    <link rel="stylesheet" href="assets/css/filtros.css">
</head>
<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "iestacio";
$password = "iestacio";
$dbname = "fotocasa";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Construir la consulta basada en los filtros proporcionados por el usuario
$sql_filtros = "SELECT * FROM pisos WHERE 1";

if(isset($_POST['provincia']) && $_POST['provincia'] !== '') {
    $provincia = $_POST['provincia'];
    $sql_filtros .= " AND provincia_id = $provincia";
}

if(isset($_POST['tipo_vivienda']) && $_POST['tipo_vivienda'] !== '') {
    $tipo_vivienda = $_POST['tipo_vivienda'];
    $sql_filtros .= " AND tipo_vivienda_id = $tipo_vivienda";
}

// Agregar más condiciones según sea necesario para los otros filtros...

// Ejecutar la consulta
$result_filtros = $conn->query($sql_filtros);

if ($result_filtros->num_rows > 0) {
    while($row_piso = $result_filtros->fetch_assoc()) {
        echo "<div class='piso'>";
        echo "<h3>" . $row_piso["titulo"] . "</h3>";
        echo "<p>Precio: $" . $row_piso["precio"] . "</p>";
        echo "<p>Habitaciones: " . $row_piso["habitaciones"] . "</p>";
        echo "<p>Baños: " . $row_piso["banos"] . "</p>";
        echo "<p>Provincia: " . $row_piso["provincia"] . "</p>";
        echo "<p>Disponibilidad: " . $row_piso["disponibilidad"] . "</p>";
        echo "<p>Imagen: " . $row_piso["imagen_url"]. "</p>";
        echo "</div>";
    }
}
?>
