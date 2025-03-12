<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestUri) {
    case '/register':
        if ($requestMethod === 'POST') {
            require_once __DIR__ . '/api/auth/register.php';
        } else {
            http_response_code(405);
            echo json_encode(['detail' => 'Metoda HTTP nu este permisă. Folosește POST.']);
        }
        break;

    case '/login':
        if ($requestMethod === 'POST') {
            require_once __DIR__ . '/api/auth/login.php';
        } else {
            http_response_code(405);
            echo json_encode(['detail' => 'Metoda HTTP nu este permisă. Folosește POST.']);
        }
        break;

    default:
        http_response_code(404);
        echo json_encode(['detail' => 'Ruta nu a fost găsită.']);
        break;
}
