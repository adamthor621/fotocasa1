<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Inmueble</title>
    <link rel="icon" type="image/jpg" href="assets/img/icono.ico">
    <link rel="stylesheet" href="assets/css/detalle_inmueble.css">
</head>
<body>
    <?php
    // Tu código PHP para conectarte a la base de datos y obtener los detalles del inmueble según el ID pasado en la URL...

    // Obtener el ID del inmueble de la URL
    $inmueble_id = $_GET['id'];

     $sql_inmueble = "SELECT * FROM pisos WHERE id = $inmueble_çid";
    $result_inmueble = $conn->query($sql_inmueble);

    
     if ($result_inmueble->num_rows > 0) {
         $row_inmueble = $result_inmueble->fetch_assoc();
         echo "<h1>" . $row_inmueble["titulo"] . "</h1>";
         echo "<p>Precio: $" . $row_inmueble["precio"] . "</p>";
     }

    ?>
</body>
</html>
