<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'livreur') {
    header('Location: index.php?action=login');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord - Livreur | FoodDelivery+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eef2f7;
        }
        .dashboard {
            margin-top: 60px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

<div class="container dashboard">
    <div class="text-center mb-5">
        <h1 class="mb-3">🚚 Tableau de bord Livreur</h1>
        
    </div>

    <div class="row g-4 text-center">
        <div class="col-md-6">
            <div class="card p-4">
                <h5 class="card-title">📦 Commandes assignées</h5>
                <p class="card-text">Voir toutes les commandes que vous devez livrer.</p>
                <a href="#" class="btn btn-primary disabled">À implémenter</a>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-4">
                <h5 class="card-title">✅ Commandes livrées</h5>
                <p class="card-text">Voir l'historique de vos livraisons terminées.</p>
                <a href="#" class="btn btn-success disabled">À implémenter</a>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card p-4 mt-3 bg-light border">
                <h5 class="card-title">🔒 Déconnexion</h5>
                <p class="card-text">Terminer votre session en toute sécurité.</p>
                <a href="index.php?action=logout" class="btn btn-danger">Se déconnecter</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
