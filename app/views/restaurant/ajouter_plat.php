<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Plat - FoodDelivery+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Ajouter un nouveau plat</h2>

    <form action="index.php?action=ajouter_plat" method="POST">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom du plat</label>
            <input type="text" name="nom" id="nom" class="form-control" required placeholder="Ex: Pizza Margherita">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required placeholder="Ingrédients, préparation, etc."></textarea>
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">Prix (en Dhs)</label>
            <input type="number" name="prix" id="prix" step="0.01" class="form-control" required placeholder="Ex: 59.90">
        </div>

        <div class="d-flex justify-content-between">
            <a href="index.php?action=restaurant_plats" class="btn btn-secondary">Retour</a>
            <button type="submit" class="btn btn-primary">Ajouter le plat</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
