<?php
namespace Controllers;

class RecipeController extends Controller {
    public function index() {
        $recipes = [
            ['id' => 1, 'name' => 'Pasta Carbonara', 'difficulty' => 'Medium'],
            ['id' => 2, 'name' => 'Classic Burger', 'difficulty' => 'Easy']
        ]; // We'll replace this with database data later
        
        echo $this->render('recipes/index.php', ['recipes' => $recipes]);
    }

    public function create() {
        echo $this->render('recipes/create.php');
    }

    public function store() {
        // We'll implement this when we add database
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // For now, just redirect back
            header('Location: /recipes');
            exit;
        }
    }
}