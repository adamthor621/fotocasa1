<?php
// Initialize session
session_start();

// Connect to the database
$db = mysqli_connect('localhost', 'iestacio', 'iestacio', 'fotocasa');

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"]) && isset($_POST["contrasenya_encriptada"])) {
        $nombre = $_POST["nombre"];
        $contrasenya_encriptada = $_POST["contrasenya_encriptada"];

        // Prepare the SQL statement to prevent SQL injection
        $stmt = $db->prepare("SELECT nombre, contrasenya FROM usuarios WHERE nombre = ?");
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if user exists
        if ($result->num_rows == 1) {
            // Fetch user data
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($contrasenya_encriptada, $user['contrasenya'])) {
                // Set session variables
                $_SESSION["nombre"] = $user["nombre"];
                $_SESSION["email"] = $user["email"];

                // Redirect to home page
                header("Location: ./");
                exit(); // Ensure that script stops here
            } else {
                // Password is incorrect, display error message
                echo "Contraseña incorrecta";
            }
        } else {
            // User not found, display error message
            echo "Usuario no encontrado ";
        }
    }
}

// Close database connection
mysqli_close($db);
?>
