<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - Food+</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('public/images/login-bg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 10%;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center mb-4">Connexion à Food+</h2>
        <?php
        
        if (isset($error_message)) {
            echo '<div class="alert alert-danger">' . $error_message . '</div>';
        }
        if (isset($success_message)) {
            echo '<div class="alert alert-success">' . $success_message . '</div>';
        }
        ?>
        <form method="POST" action="?action=login">
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" name="email" class="form-control" required placeholder="exemple@mail.com">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" name="password" class="form-control" required placeholder="Votre mot de passe">
            </div>
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>

        <div class="text-center mt-3">
            <small>Pas de compte ? <a href="?action=register">Créer un compte</a></small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>