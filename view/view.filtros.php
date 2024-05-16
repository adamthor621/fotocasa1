<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de Pisos</title>
    <link rel="icon" type="image/jpg" href="assets/img/icono.ico">
    <link rel="stylesheet" href="assets/css/filtros.css">
</head>
<body>

<h1>Buscador de Pisos</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="provincia">Provincia:</label>
    <select name="provincia" id="provincia">
        <option value="">Todas</option>
        <?php
        // Obtener provincias
        $sql_provincias = "SELECT * FROM provincias";
        $result_provincias = $conn->query($sql_provincias);
        while($row_provincia = $result_provincias->fetch_assoc()) {
            echo "<option value='" . htmlspecialchars($row_provincia['nombre_provincia']) . "'>" . htmlspecialchars($row_provincia['nombre_provincia']) . "</option>";
        }
        ?>
    </select>

    <label for="tipo_vivienda">Tipo de pisos:</label>
    <select name="tipo_vivienda" id="tipo_vivienda">
        <option value="">Todos</option>
        <?php
        // Obtener tipos de pisos
        $sql_tipos_pisos = "SELECT * FROM tipo_pisos";
        $result_tipos_pisos = $conn->query($sql_tipos_pisos);
        while($row_tipo_piso = $result_tipos_pisos->fetch_assoc()) {
            echo "<option value='" . htmlspecialchars($row_tipo_piso['codigo_tipo']) . "'>" . htmlspecialchars($row_tipo_piso['tipo']) . "</option>";
        }
        ?>
    </select>

    <label for="extras">Extras:</label>
    <select name="extras" id="extras">
        <option value="">Cualquiera</option>
        <?php
        // Obtener extras
        $sql_extras = "SELECT * FROM extras";
        $result_extras = $conn->query($sql_extras);
        while($row_extra = $result_extras->fetch_assoc()) {
            echo "<option value='" . htmlspecialchars($row_extra['id']) . "'>" . htmlspecialchars($row_extra['nombre']) . "</option>";
        }
        ?>
    </select>

    <label for="banos">Baños:</label>
    <select name="banos" id="banos">
        <option value="">Cualquiera</option>
        <option value="1">1 baño</option>
        <option value="2">2 baños</option>
        <option value="3">3 baños</option>
    </select>

    <label for="busqueda">Búsqueda:</label>
    <input type="text" name="busqueda" id="busqueda" placeholder="Palabra clave">

    <button type="submit">Buscar</button>
</form>

<h2>Resultados:</h2>
<div id="resultados">
    <?php
    // Mostrar resultados
    foreach ($result_filtros as $row_piso) {
        echo "<div class='piso'>";
        echo "<h3>" . htmlspecialchars($row_piso["titulo"]) . "</h3>";
        echo "<p>Precio: $" . htmlspecialchars($row_piso["precio"]) . "</p>";
        echo "<p>Descripcion: " . htmlspecialchars($row_piso["descripcion"]) . "</p>";
        echo "<div class='oculto'>";
        echo "<p>Habitaciones: " . htmlspecialchars($row_piso["habitaciones"]) . "</p>";
        echo "<p>Baños: " . htmlspecialchars($row_piso["banos"]) . "</p>";
        echo "<p>Provincia: " . htmlspecialchars($row_piso["provincia"]) . "</p>";
        echo "<p>Disponibilidad: " . htmlspecialchars($row_piso["disponibilidad"]) . "</p>";
        echo "<a href='" . htmlspecialchars($row_piso["imagen_url"]) . "'>Imagen</a>";
        echo "</div>";

        echo "<button onclick='mostrarInfo(this)'>Mostrar más</button>";
        echo "</div>";
    }
    ?>
</div>

<script>
    function mostrarInfo(btn) {
        let info = btn.previousElementSibling; // Obtener el elemento anterior, que es el div con la información oculta
        if (info.style.display === 'none' || info.style.display === '') {
            info.style.display = 'block';
            btn.innerText = 'Mostrar menos';
        } else {
            info.style.display = 'none';
            btn.innerText = 'Mostrar más';
        }
    }
</script>

</body>
</html>
