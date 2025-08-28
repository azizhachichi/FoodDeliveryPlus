<?php
require_once 'app/models/User.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            if ($this->userModel->register($nom, $email, $password, $role)) {
                echo "<div class='alert alert-success'>Inscription réussie. <a href='?action=login' class='alert-link'>Se connecter</a></div>";
            } else {
                echo "<div class='alert alert-danger'>Erreur lors de l'inscription. Veuillez réessayer.</div>";
            }
        } else {
            include 'app/views/register.php';
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->userModel->login($email, $password);

            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];

                switch ($user['role']) {
                    case 'client':
                        header('Location: index.php?action=client_home');
                        break;
                    case 'restaurant':
                        header('Location: index.php?action=restaurant_dashboard');
                        break;
                    case 'livreur':
                        header('Location: index.php?action=livreur_dashboard');
                        break;
                    case 'admin':
                        header('Location: index.php?action=admin_dashboard');
                        break;
                    default:
                        header('Location: index.php?action=login');
                        break;
                }
                exit();
            } else {
                $error_message = "Email ou mot de passe incorrect.";
                include 'app/views/login.php';
            }
        } else {
            include 'app/views/login.php';
        }
    }

    
public function showRestaurants() {
    require_once 'app/models/User.php';
    $this->userModel = new User();
    $restaurants = $this->userModel->getRestaurants();
    include 'app/views/client/restaurants.php';
}


    public function logout() {
        session_destroy();
        header('Location: index.php?action=login');
        exit();
    }
}
