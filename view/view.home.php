<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <base href="https://localhost/projecte/">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" href="./assets/img/icono.ico">
</head>
<body>
    
    <header>
        <div class="menu">
        <li><a href="index.php?opcion=comprar">Comprar</a></li>
                <li><a href="index.php?opcion=alquilar">Alquilar</a></li
            <a href="view/view.registro.php" class="button">Registro</a>
            <a href="view/view.login.php" class="button">Login</a>
        </div>
        <div class="content">
            <?php 
            include_once 'includes/header.php';
            ?>
        </div>
    </header>

    <h2>Bienvenido</h2>
    <?php
    echo "hola";
    session_start();
    if (isset($_SESSION['nombre'])) {
        echo '<p>Hola, ' . $_SESSION['nombre'] . '</p>';
        echo '<p>Email: ' . $_SESSION['email'] . '</p>';
        echo '<a href="/controller/crontroller.login.php">Cerrar sesión</a>';
    } else {
        // Si no hay sesión, redirigir al usuario al formulario de inicio de sesión
        header('Location: view\view.login.php');
        session_destroy();
    }
    
    ?>
    

    <?php include 'includes/footer.php'; ?>

    <!-- <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/main.js"></script> -->
</body>
</html>
