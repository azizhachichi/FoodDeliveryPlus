<?php
require_once 'app/models/Plat.php';

class PlatController {
    private $model;

    public function __construct() {
        $this->model = new Plat();
    }

    // Affiche tous les plats du restaurant connecté
    public function index() {
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'restaurant') {
            header('Location: index.php?action=login');
            exit();
        }

        $plats = $this->model->getByRestaurant($_SESSION['user_id']);
        include 'app/views/restaurant/plats.php';
    }

    // Ajouter un plat (formulaire + traitement)
    public function ajouter() {
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'restaurant') {
            header('Location: index.php?action=login');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = trim($_POST['nom'] ?? '');
            $description = trim($_POST['description'] ?? '');
            $prix = floatval($_POST['prix'] ?? 0);

            if ($nom && $description && $prix > 0) {
                $this->model->add($nom, $description, $prix, $_SESSION['user_id']);
                header('Location: index.php?action=restaurant_plats');
                exit();
            } else {
                $error_message = "Tous les champs sont obligatoires et le prix doit être valide.";
                include 'app/views/restaurant/ajouter_plat.php';
            }
        } else {
            include 'app/views/restaurant/ajouter_plat.php';
        }
    }

    // Modifier un plat (formulaire + traitement)
    public function modifier() {
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'restaurant') {
            header('Location: index.php?action=login');
            exit();
        }

        $id = $_GET['id'] ?? null;
        if (!$id || !is_numeric($id)) {
            echo "ID invalide.";
            return;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = trim($_POST['nom'] ?? '');
            $description = trim($_POST['description'] ?? '');
            $prix = floatval($_POST['prix'] ?? 0);

            if ($nom && $description && $prix > 0) {
                $this->model->update($id, $nom, $description, $prix);
                header('Location: index.php?action=restaurant_plats');
                exit();
            } else {
                $error_message = "Tous les champs sont obligatoires et le prix doit être valide.";
                $plat = $this->model->getById($id);
                include 'app/views/restaurant/modifier_plat.php';
            }
        } else {
            $plat = $this->model->getById($id);
            include 'app/views/restaurant/modifier_plat.php';
        }
    }

    // Supprimer un plat
    public function supprimer() {
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'restaurant') {
            header('Location: index.php?action=login');
            exit();
        }

        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $this->model->delete($_GET['id']);
        }

        header('Location: index.php?action=restaurant_plats');
        exit();
    }
}
