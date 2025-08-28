<div class="container mt-5">
    <h2 class="mb-4">🛒 Mon panier</h2>
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

    <?php
    require_once __DIR__ . '/../../../app/models/Plat.php';

    $platModel = new Plat();
    $panierIds = $_SESSION['panier'] ?? [];

    $plats = $platModel->getPlatsByIds($panierIds);

    if (empty($plats)) {
        echo "<div class='alert alert-info'>Votre panier est vide.</div>";
    } else {
        echo "<ul class='list-group mb-4'>";
        $total = 0;
        foreach ($plats as $plat) {
            echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
            echo "<strong>" . htmlspecialchars($plat['nom']) . "</strong>";
            echo "<span>" . number_format($plat['prix'], 2) . " DH</span>";
            echo "</li>";
            $total += $plat['prix'];
        }
        echo "</ul>";
        echo "<h4>Total : <span class='badge bg-primary'>" . number_format($total, 2) . " DH</span></h4>";

        echo "
        <form method='post' action='index.php?action=valider_commande' class='d-inline-block me-2'>
            <button type='submit' class='btn btn-success'>✅ Commander</button>
        </form>
        <form method='post' action='index.php?action=vider_panier' class='d-inline-block'>
            <button type='submit' class='btn btn-danger'>🗑️ Vider le panier</button>
        </form>
        ";
    }
    ?>
</div>
