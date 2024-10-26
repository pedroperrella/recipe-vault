<?php
namespace Config;

class Router {
    private $routes = [];

    public function add($method, $path, $controller, $action) {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'action' => $action
        ];
    }

    public function dispatch($method, $uri) {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $uri) {
                $controller = new $route['controller']();
                return $controller->{$route['action']}();
            }
        }
        return $this->notFound();
    }

    private function notFound() {
        http_response_code(404);
        require '../src/views/404.php';
    }
}