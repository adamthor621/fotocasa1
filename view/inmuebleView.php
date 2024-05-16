<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Búsqueda</title>
    <link rel="icon" type="image/jpg" href="assets/img/icono.ico">
    <link rel="stylesheet" href="assets/css/filtros.css">
</head>
<body>
    <h1>Resultados de Búsqueda</h1>
    <div id="resultados">
        <?php
        foreach ($results as $result) {
            echo "<div class='piso'>";
            echo "<h3>" . $result["titulo"] . "</h3>";
            echo "<p>Precio: $" . $result["precio"] . "</p>";
            // Mostrar más detalles del inmueble según sea necesario
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
