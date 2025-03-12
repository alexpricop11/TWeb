<?php

require_once __DIR__ . '/../config/database.php';

class User
{
    private $conn;
    private $table = 'users';

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect();
        if ($this->conn === null) {
            die('Database connection failed.');
        }
    }

    public function register($username, $password, $email)
    {

        $query = "INSERT INTO " . $this->table . " (username, password, email) 
                 VALUES (:username, :password, :email)";

        $stmt = $this->conn->prepare($query);


        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function login($username, $password)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE username = :username LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }

    public function usernameExists($username)
    {
        $query = "SELECT COUNT(*) FROM " . $this->table . " WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }
}
