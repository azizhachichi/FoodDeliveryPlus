<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mes Plats - FoodDelivery+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f1f1;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .card-title {
            font-weight: bold;
        }
        .btn-danger {
            float: right;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Liste de mes plats</h2>
        <a href="index.php?action=ajouter_plat" class="btn btn-success">+ Ajouter un plat</a>
    </div>

    <?php if (empty($plats)): ?>
        <div class="alert alert-warning text-center">
            Aucun plat trouvé. Cliquez sur "Ajouter un plat" pour commencer.
        </div>
    <?php else: ?>
        <div class="row">
            <?php foreach ($plats as $plat): ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card p-3">
                        <h5 class="card-title"><?= htmlspecialchars($plat['nom']) ?></h5>
                        <p class="card-text"><?= nl2br(htmlspecialchars($plat['description'])) ?></p>
                        <p class="card-text fw-bold">Prix : <?= number_format($plat['prix'], 2) ?> DH</p>
                        <a href="index.php?action=supprimer_plat&id=<?= $plat['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous vraiment supprimer ce plat ?');">Supprimer</a>
                        <a href="index.php?action=modifier_plat&id=<?= $plat['id'] ?>" class="btn btn-warning btn-sm me-2">Modifier</a>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
