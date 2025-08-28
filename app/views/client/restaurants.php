<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Restaurants disponibles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('/FoodDeliveryPlus/public/images/background.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            padding: 40px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 40px;
            font-weight: 700;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h5 {
            margin-bottom: 15px;
            font-weight: 600;
        }

        .btn-primary {
            background-color: #2575fc;
            border-color: #2575fc;
        }

        .btn-primary:hover {
            background-color: #1a5edc;
            border-color: #1a5edc;
        }
    </style>
</head>
<body>

    <h2>Restaurants disponibles</h2>

    <div class="container">
        <div class="row">
            <?php foreach ($restaurants as $resto): ?>
                <div class="col-md-4 mb-4">
                    <div class="card p-4 text-center">
                        <h5><?= htmlspecialchars($resto['nom']) ?></h5>
                        <a href="index.php?action=voir_plats&id=<?= $resto['id'] ?>" class="btn btn-primary">
                            Voir les plats
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
