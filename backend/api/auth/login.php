<?php
header('Content-Type: application/json');

require_once __DIR__ . '/../../controllers/AuthController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    $username = isset($data['username']) ? $data['username'] : null;
    $password = isset($data['password']) ? $data['password'] : null;

    $authController = new AuthController();
    $result = $authController->login($username, $password);

    http_response_code($result['status']);
    echo json_encode($result);
} else {
    http_response_code(405);
    echo json_encode(['detail' => 'Metoda HTTP nu este permisă. Folosește POST.']);
}