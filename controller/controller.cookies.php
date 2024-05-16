<?php

// Supongamos que aquí hay lógica para obtener el nombre de usuario desde la base de datos
function obtenerNombreDeUsuarioDesdeBaseDeDatos() {
    // Aquí realizas la conexión a la base de datos y obtienes el nombre de usuario
    $username = ""; // Aquí obtienes el nombre de usuario de la base de datos
    return $username;
}

class CookieController {
    public function setCookie() {
        $username = obtenerNombreDeUsuarioDesdeBaseDeDatos();
        if (!empty($username)) {
            $cookie_name = "user";
            $cookie_value = $username;
            $expiration_time = time() + (24 * 60 * 60); // 1 día en segundos
            setcookie($cookie_name, $cookie_value, $expiration_time, "/");
            echo "Cookie configurada correctamente para el usuario: $username.";
        } else {
            echo "No se pudo obtener el nombre de usuario desde la base de datos.";
        }
    }
}
?>
