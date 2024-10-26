<?php
define('BASE_PATH', dirname(__DIR__));
// Show errors during development
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Autoload classes
spl_autoload_register(function ($class) {
    $file = '../src/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

// Start session
session_start();

// Create router instance
$router = new Config\Router();

// Define routes
$router->add('GET', '/recipes', 'Controllers\RecipeController', 'index');
$router->add('GET', '/recipes/create', 'Controllers\RecipeController', 'create');
$router->add('POST', '/recipes', 'Controllers\RecipeController', 'store');

// Get current URI and method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

// Dispatch the request
$router->dispatch($method, $uri);