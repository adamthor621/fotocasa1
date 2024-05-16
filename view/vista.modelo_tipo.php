<!DOCTYPE html>
<html>
<head>
    <title>Listado de Inmuebles</title>
</head>
<body>
    <?php 
    include('./controller/controller.tipo_pisos.php');
    
    
    ?>
    <h1>Listado de Inmuebles</h1>
    <a href="./home.php">Casa</a>
    <table border="1">
        <tr>
            <th>codigo_tipo</th>
            <th>Tipo</th>
        </tr>
        <?php
      
        foreach ($inmuebles as $inmueble): ?>
            <tr>
                <td><?php echo $inmueble['codigo_tipo']; ?></td>
                <td><?php echo $inmueble['tipo']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
