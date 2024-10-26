<?php ob_start(); ?>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <?php foreach ($recipes as $recipe): ?>
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold mb-2"><?= htmlspecialchars($recipe['name']) ?></h2>
            <p class="text-gray-600">Difficulty: <?= htmlspecialchars($recipe['difficulty']) ?></p>
            <a href="/recipes/<?= $recipe['id'] ?>" class="text-blue-500 hover:text-blue-700 mt-4 inline-block">
                View Recipe
            </a>
        </div>
    <?php endforeach; ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require '../src/views/layouts/main.php'; ?>