<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Vault</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow mb-4">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <a href="/" class="text-xl font-bold">Recipe Vault</a>
                <div>
                    <a href="/recipes" class="text-gray-800 mx-2">Recipes</a>
                    <a href="/recipes/create" class="text-gray-800 mx-2">Add Recipe</a>
                </div>
            </div>
        </div>
    </nav>
    
    <main class="container mx-auto px-6 py-4">
        <?php echo $content ?? ''; ?>
    </main>
</body>
</html>