<?php
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/PlatController.php';

$auth = new AuthController();
$platController = new PlatController();

global $auth, $platController;

$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'login':
        $auth->login();
        break;
    case 'register':
        $auth->register();
        break;
    case 'logout':
        $auth->logout();
        break;
    case 'plats':
        $platController->index();
        break;
    case 'ajouter_plat':
        $platController->ajouter();
        break;
    case 'supprimer_plat':
        $platController->supprimer();
        break;
    case 'client_home':
        include 'app/views/client_home.php';
        break;
    case 'restaurant_dashboard':
        include 'app/views/restaurant/restaurant_dashboard.php';
        break;
    case 'livreur_dashboard':
        include 'app/views/livreur_dashboard.php';
        break;
    case 'admin_dashboard':
        include 'app/views/admin_dashboard.php';
        break;
    case 'restaurant_plats':
    $platController->index();
    break;
case 'ajouter_plat':
    $platController->ajouter();
    break;
case 'modifier_plat':
    $platController->modifier();
    break;
case 'supprimer_plat':
    $platController->supprimer();
    break;

        default:
        echo "404 - Page non trouvée";
        break;
}
