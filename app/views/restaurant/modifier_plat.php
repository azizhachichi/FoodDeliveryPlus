<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un plat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('/FoodDeliveryPlus/public/images/') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #343a40;
        }

        label {
            font-weight: 600;
            color: #495057;
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Modifier un plat</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom du plat</label>
            <input type="text" name="nom" class="form-control" value="<?= htmlspecialchars($plat['nom']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4" required><?= htmlspecialchars($plat['description']) ?></textarea>
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">Prix (TND)</label>
            <input type="number" name="prix" step="0.01" class="form-control" value="<?= $plat['prix'] ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
