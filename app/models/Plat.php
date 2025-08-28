<?php
require_once __DIR__ . '/../config/Database.php';

class Plat {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    /**
     * Obtenir tous les plats d'un restaurant spécifique
     */
    public function getByRestaurant($restaurantId) {
        $stmt = $this->conn->prepare("SELECT * FROM plats WHERE restaurant_id = ?");
        $stmt->execute([$restaurantId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Ajouter un nouveau plat
     */
    public function add($nom, $description, $prix, $restaurantId) {
        $stmt = $this->conn->prepare("INSERT INTO plats (nom, description, prix, restaurant_id) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nom, $description, $prix, $restaurantId]);
    }

    /**
     * Supprimer un plat par ID
     */
    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM plats WHERE id = ?");
        return $stmt->execute([$id]);
    }

    /**
     * Obtenir un plat par son ID
     */
    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM plats WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Mettre à jour un plat
     */
    public function update($id, $nom, $description, $prix) {
        $stmt = $this->conn->prepare("UPDATE plats SET nom = ?, description = ?, prix = ? WHERE id = ?");
        return $stmt->execute([$nom, $description, $prix, $id]);
    }

    /**
     * Récupérer plusieurs plats par leurs IDs (pour le panier par exemple)
     */
    public function getPlatsByIds($ids) {
        if (empty($ids)) return [];

        // Prépare des placeholders (?, ?, ?, ...)
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $stmt = $this->conn->prepare("SELECT * FROM plats WHERE id IN ($placeholders)");
        $stmt->execute($ids);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
