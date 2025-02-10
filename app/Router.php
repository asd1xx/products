<?php

namespace App;

use App\Request;

class Router
{
    private $routes = [];

    public function dispatch(): void
    {
        $url = Request::getPath();
        $method = Request::getMethod();
        $callback = $this->routes[$method][$url] ?? false;

        if (!isset($callback)) {
            throw new \Exception("Route not found");
        }

        call_user_func([new $callback[0], $callback[1]]);
    }

    public function get(string $url, array|callable $callback): void
    {
        $this->routes['get'][$url] = $callback;
    }

    public function post(string $url, array|callable $callback): void
    {
        $this->routes['post'][$url] = $callback;
    }
}
