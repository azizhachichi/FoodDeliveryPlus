<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord - Admin | Food+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fa;
        }
        .dashboard {
            margin-top: 60px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-title {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container dashboard">
    <div class="text-center mb-5">
        <h1 class="mb-3">👮 Tableau de bord Administrateur</h1>
     
    </div>

    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="card p-4">
                <h5 class="card-title">👥 Gérer les utilisateurs</h5>
                <p class="card-text">Consulter et gérer les comptes des clients, restaurants et livreurs.</p>
                <a href="#" class="btn btn-primary disabled">Fonction à implémenter</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4">
                <h5 class="card-title">🍽️ Voir tous les plats</h5>
                <p class="card-text">Visualiser l'ensemble des plats ajoutés par les restaurants.</p>
                <a href="#" class="btn btn-primary disabled">Voir tous les plats</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4">
                <h5 class="card-title">📊 Statistiques</h5>
                <p class="card-text">Voir l’activité générale de la plateforme (bientôt disponible).</p>
                <a href="#" class="btn btn-secondary disabled">Statistiques</a>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card p-4 mt-3 bg-light border">
                <h5 class="card-title">🔒 Déconnexion</h5>
                <p class="card-text">Terminer votre session administrateur en toute sécurité.</p>
                <a href="index.php?action=logout" class="btn btn-danger">Se déconnecter</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
