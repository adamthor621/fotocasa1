<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <base href="http://localhost/projecte/">
    <link rel="icon" type="image/jpg" href="assets/img/icono.ico">
    <link rel="stylesheet" href="assets/css/registro.css">
    
</head>
<body>
<a href="./home.php">Casa</a>
    
    <h2>Registro de Usuario</h2>
    <form action="controller/controller.registro.php" method="post">
        Nombre: <input type="text" name="nombre" id="nombre"><br>
        Email: <input type="email" name="email" id="email"><br>
        Contraseña: <input type="password" name="contrasenya_encriptada" id="contrasenya_encriptada"><br>

        <input type="submit" value="Registrar">
        
    <p>¿Ya tienes una cuenta? <a href="view/view.login.php">Inicia sesión aquí</a>.</p>
    </form>
</body>
</html>