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
   
case 'modifier_plat':
    $platController->modifier();
    break;

 case 'voir_plats':
    (new PlatController())->voirPlatsParRestaurant();
    break;
   
case 'restaurants':
    (new AuthController())->showRestaurants();
    break;


        default:
        echo "404 - Page non trouvée";
        break;

        case 'ajouter_panier':
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = [];
    }

    if (isset($_GET['id'])) {
        $_SESSION['panier'][] = $_GET['id'];
    }

    echo "<div class='alert alert-success'>Plat ajouté au panier ! <a href='index.php?action=voir_panier'>Voir le panier</a></div>";
    break;

    case 'voir_panier':
    include 'app/views/client/panier.php';
    break;

    case 'valider_commande':
    // Simule une commande (à améliorer plus tard)
    echo "<div class='alert alert-success'>Commande validée ! Merci pour votre achat.</div>";
    $_SESSION['panier'] = [];
    break;

case 'vider_panier':
    $_SESSION['panier'] = [];
    echo "<div class='alert alert-info'>Panier vidé.</div>";
    break;

    case 'valider_commande':
    if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'client') {
        echo "<div class='alert alert-danger'>Vous devez être connecté en tant que client.</div>";
        break;
    }

    require_once __DIR__ . '/../app/models/Commande.php';
    $commandeModel = new Commande();
    $clientId = $_SESSION['user_id'];
    $platIds = $_SESSION['panier'] ?? [];

    if (empty($platIds)) {
        echo "<div class='alert alert-warning'>Votre panier est vide.</div>";
        break;
    }

    $commandeId = $commandeModel->creerCommande($clientId, $platIds);

    if ($commandeId) {
        echo "<div class='alert alert-success'>Commande validée ! ID commande : $commandeId</div>";
        $_SESSION['panier'] = [];
    } else {
        echo "<div class='alert alert-danger'>Erreur lors de la commande.</div>";
    }
    break;


}
