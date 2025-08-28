<?php
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'client') {
    header('Location: index.php?action=login');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil Client - Food+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .dashboard {
            padding: 60px 20px;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Food+</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php?action=logout" class="btn btn-outline-light">Déconnexion</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="dashboard container">
    <div class="text-center mb-5">
        <h1>Bienvenue, cher client !</h1>
        <p class="text-muted">Découvrez les restaurants et plats disponibles.</p>
        <a href="index.php?action=restaurants" class="btn btn-primary">Voir les restaurants</a>
        <a href="" class="btn btn-primary">Voir l'historique</a>
        <a href="" class="btn btn-primary">Voir l'etat d'une commande</a>

        
    </div>

   
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
