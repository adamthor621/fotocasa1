<?php
require_once('class.database.php');
// Conexión a la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);
$contrasenya_encriptada = md5($password);
// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$password = $_POST['contrasenya_encriptada'];

// Insertar los datos en la tabla 'usuarios'
$sql = "INSERT INTO usuarios (id,nombre,email,contraseña) VALUES ('$nombre', '$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
