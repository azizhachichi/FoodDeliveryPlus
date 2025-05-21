<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'restaurant') {
    header('Location: index.php?action=login');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord - Restaurant | FoodDelivery+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f9fc;
        }
        .dashboard {
            margin-top: 60px;
        }
        .card {
            border-radius: 15px;
            transition: 0.3s;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card-title {
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container dashboard">
    <div class="text-center mb-5">
       
        <p class="lead">Voici votre tableau de bord restaurant.</p>
    </div>

    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card p-4">
                <h5 class="card-title">📋 Gérer mes plats</h5>
                <p class="card-text">Ajouter, supprimer ou modifier vos plats disponibles.</p>
                <a href="index.php?action=restaurant_plats" class="btn btn-primary">Voir les plats</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card p-4">
                <h5 class="card-title">➕ Ajouter un plat</h5>
                <p class="card-text">Créez un nouveau plat à proposer aux clients.</p>
                <a href="index.php?action=ajouter_plat" class="btn btn-success">Ajouter un plat</a>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card p-4">
                <h5 class="card-title">🚪 Se déconnecter</h5>
                <p class="card-text">Terminer la session en toute sécurité.</p>
                <a href="index.php?action=logout" class="btn btn-danger">Déconnexion</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
