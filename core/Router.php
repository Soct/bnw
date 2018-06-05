<?php

namespace Task\Core;

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (!array_key_exists($uri, $this->routes[$requestType])) {
            throw new \Exception('No route defined for that uri');
        }

        return $this->callAction(
            ...explode('@', $this->routes[$requestType][$uri])
        );
    }

    private function callAction($controller, $action)
    {
        $controller = "Task\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new \Exception(
                "{$controller} does not respond to the {$action} action"
            );
        }

        return $controller->$action();
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}
