<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription - FoodDelivery+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('FoodDeliveryPlus/public/images/register-bg.jpg'); /* Remplace avec ton image */
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .register-container {
            max-width: 500px;
            margin: auto;
            margin-top: 5%;
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
<div class="register-container">
    <h2 class="text-center mb-4">Créer un compte</h2>

    <?php if (isset($error_message)): ?>
        <div class="alert alert-danger"><?= $error_message ?></div>
    <?php endif; ?>

    <?php if (isset($success_message)): ?>
        <div class="alert alert-success"><?= $success_message ?></div>
    <?php endif; ?>

    <form method="POST" action="?action=register">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom complet</label>
            <input type="text" name="nom" class="form-control" required placeholder="Votre nom">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse Email</label>
            <input type="email" name="email" class="form-control" required placeholder="exemple@mail.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control" required placeholder="********">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Rôle</label>
            <select name="role" class="form-select" required>
                <option value="" disabled selected>Choisir un rôle</option>
                <option value="client">Client</option>
                <option value="restaurant">Restaurant</option>
                <option value="livreur">Livreur</option>
                <option value="admin">Administrateur</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
    </form>

    <div class="text-center mt-3">
        <small>Vous avez déjà un compte ? <a href="?action=login">Se connecter</a></small>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
