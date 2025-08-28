<?php
require_once __DIR__ . '/../config/Database.php';

class User {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function register($nom, $email, $password, $role) {
        try {
            $passwordHashed = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $this->conn->prepare("INSERT INTO users (nom, email, password, role) VALUES (?, ?, ?, ?)");
            return $stmt->execute([$nom, $email, $passwordHashed, $role]);
        } catch (PDOException $e) {
            echo "Erreur d'inscription : " . $e->getMessage();
            return false;
        }
    }

    public function login($email, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        

        return false;
    }
    public function getRestaurants() {
    $stmt = $this->conn->prepare("SELECT id, nom FROM users WHERE role = 'restaurant'");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
    
}
