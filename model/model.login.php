<?php
require_once('model/model.login.php');
include 'class.database.php';

// Verificar si se reciben los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simular verificación de usuario y contraseña (Aquí deberías implementar tu lógica de autenticación)
    $username = $_POST['nombre'];
    $password = $_POST['contrasenya_encriptada'];

    // Verificación de usuario y contraseña (esto es solo un ejemplo)
    $db = new Database();
    $db->$connection(); 

    // Usar sentencias preparadas para evitar la inyección SQL
    $sql = "SELECT * FROM usuarios WHERE nombre = ? AND contrasenya = ?";
    $conn = $db->prepare($sql);
    if ($conn === false) {
        die("Error al preparar la consulta: " . $db->error);
    }
    $conn->bind_param("ss", $username, $password);
    $conn->execute();
    $result = $conn->get_result();

    if ($result && $result->num_rows > 0) {
        $_SESSION['nombre'] = $username;
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false, 'message' => 'Usuario o contraseña incorrectos.'));
    }

    $conn->close();
} else {
    header("Location: index.php");
    exit();
}

// Incluir el archivo de vista del menú
require_once('view/view.menu.php');

// Mostrar el nombre de usuario en el menú
if (isset($_SESSION['nombre'])) {
    $menuView = new MenuView();
    $menuView->showUserName($_SESSION['nombre']);
}
class MenuView {
    // ...

    function showUserName($username) {
        echo "<p>Bienvenido, $username!</p>";
    }
}
?>