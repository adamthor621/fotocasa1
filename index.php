<?php
// Mostrar errores al servidor
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', 'php_errors.log');

// Analizar la URL para determinar la ruta
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'home';
echo "($url)";
// Validate URL parameter

/*$allowed_urls = ['home', 'login', 'registro'];
if (!in_array($url, $allowed_urls)) {
    http_response_code(404);
    echo 'Página no encontrada';
    exit;
}*/

// Lógica para llamar al controlador y al método adecuado según la ruta
switch ($url) {
    case 'home':
        include_once('controller/controller.filtros.php');
        break;
    case 'login':
        include_once('controller/controller.login.php');
        break;
    case 'registro':
        include_once('controller/controller.registro.php');
        break;
    case 'inmuebles':
        include_once('controller/controller.filtros.php');
        break;
    default:
        echo 'Página no encontrada';
        break;
};
