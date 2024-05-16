<!DOCTYPE html>
<html>
<head>
<title>Login de Usuario</title>
<base href="http://localhost/projecte/">
<link rel="icon" type="image/jpg" href="assets/img/icono.ico">
<link rel="stylesheet" href="assets/css/registro.css">
</head>
<body>
    <h2>Login de Usuario</h2>
    <a href="view.home.php">Casa</a>
    <form action="/controller/crontroller.login.php" method="post">
        Nombre: <input type="text" name="nombre" id="nombre"><br>
        Contraseña: <input type="password" name="contrasenya_encriptada" id="contrasenya_encriptada"><br>

        <input type="submit" value="Entrar">

        <p>No tienes una cuenta <a href="view/view.registro.php">REGISTRATE</a>.</p>
    </form>
</body>
</html>
