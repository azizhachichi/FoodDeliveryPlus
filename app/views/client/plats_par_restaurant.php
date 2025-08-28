<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Menu du Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <style>
      body {
    background: url('/FoodDeliveryPlus/public/images/background.jpg') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    padding: 30px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #fff;
}
        h2 {
            font-weight: bold;
            color: #fff;
        }

        .card {
            background-color: #ffffff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 12px;
            color: #343a40;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .card h5 {
            color: #007bff;
            font-size: 1.25rem;
        }

        .card p {
            color: #495057;
        }

        .card strong {
            color: #28a745;
            font-size: 1.1rem;
        }

        .alert {
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }
    </style>
</head>
<body>

<h2 class="mb-4">Plats disponibles</h2>

<?php if (empty($plats)): ?>
    <p>Aucun plat trouvé pour ce restaurant.</p>
<?php else: ?>
    <div class="row">
        <?php foreach ($plats as $plat): ?>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm p-3">
                    <h5><?= htmlspecialchars($plat['nom']) ?></h5>
                    <p><?= nl2br(htmlspecialchars($plat['description'])) ?></p>
                    <p><strong><?= number_format($plat['prix'], 2) ?> DH</strong></p>
                    <a href="index.php?action=ajouter_panier&id=<?= $plat['id'] ?>" class="btn btn-primary">Ajouter au panier</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
