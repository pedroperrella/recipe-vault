<?php ob_start(); ?>

<div class="max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-6">Add New Recipe</h1>
    
    <form action="/recipes" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Recipe Name
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   id="name" 
                   type="text" 
                   name="name" 
                   required>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="difficulty">
                Difficulty
            </label>
            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="difficulty"
                    name="difficulty">
                <option value="Easy">Easy</option>
                <option value="Medium">Medium</option>
                <option value="Hard">Hard</option>
            </select>
        </div>
        
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="instructions">
                Instructions
            </label>
            <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                      id="instructions"
                      name="instructions"
                      rows="4"
                      required></textarea>
        </div>
        
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                Add Recipe
            </button>
        </div>
    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require '../src/views/layouts/main.php'; ?>