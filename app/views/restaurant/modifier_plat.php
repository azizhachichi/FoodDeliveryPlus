<form method="POST">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom du plat</label>
        <input type="text" name="nom" class="form-control" value="<?= htmlspecialchars($plat['nom']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control" required><?= htmlspecialchars($plat['description']) ?></textarea>
    </div>
    <div class="mb-3">
        <label for="prix" class="form-label">Prix (€)</label>
        <input type="number" name="prix" step="0.01" class="form-control" value="<?= $plat['prix'] ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>
