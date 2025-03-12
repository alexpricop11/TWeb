<?php
require_once __DIR__ . '/../models/User.php';

class AuthController
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function register($username, $password, $email = null)
    {
        if (empty($username) || empty($password)) {
            return ['status' => 400, 'detail' => 'Username and password are required'];
        }
        if ($this->user->usernameExists($username)) {
            return ['status' => 400, 'detail' => 'Username already exists'];
        }
        if ($this->user->register($username, $password, $email)) {
            $token = $this->generateToken($username);
            var_dump($token);
            die;
            return ['status' => 201, 'token' => $token];
        } else {
            return ['status' => 500, 'detail' => 'Registration failed'];
        }
    }

    public function login($username, $password)
    {
        if (empty($username) || empty($password)) {
            return ['status' => 400, 'detail' => 'Username and password are required'];
        }

        $user = $this->user->login($username, $password);

        if ($user) {
            $token = $this->generateToken($username);
            return ['status' => 200, 'token' => $token];
        } else {
            return ['status' => 401, 'detail' => 'Invalid credentials'];
        }
    }

    private function generateToken($username)
    {
        $header = base64_encode(json_encode(['alg' => 'HS256', 'typ' => 'JWT']));
        $payload = base64_encode(json_encode([
            'username' => $username,
            'iat' => time(),
            'exp' => time() + (24 * 60 * 60)
        ]));
        $secret = 'secret_key';
        $signature = base64_encode(hash_hmac('sha256', "$header.$payload", $secret, true));

        return "$header.$payload.$signature";
    }
}