<?php
require_once __DIR__ . '/../config/Database.php';

class Plat {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getByRestaurant($restaurantId) {
        $stmt = $this->conn->prepare("SELECT * FROM plats WHERE restaurant_id = ?");
        $stmt->execute([$restaurantId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($nom, $description, $prix, $restaurantId) {
        $stmt = $this->conn->prepare("INSERT INTO plats (nom, description, prix, restaurant_id) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nom, $description, $prix, $restaurantId]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM plats WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM plats WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nom, $description, $prix) {
        $stmt = $this->conn->prepare("UPDATE plats SET nom = ?, description = ?, prix = ? WHERE id = ?");
        return $stmt->execute([$nom, $description, $prix, $id]);
    }
}
