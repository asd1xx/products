<?php

namespace App;

use App\Request;

class Router
{
    private $routes = [];

    public function dispatch($url)
    {
        $method = Request::getMethod();
        $callback = $this->routes[$method][$url] ?? false;

        if (!isset($callback)) {
            throw new \Exception("Route not found");
        }

        call_user_func([new $callback[0], $callback[1]]);
    }

    public function get(string $url, $callback)
    {
        $this->routes['get'][$url] = $callback;
    }

    public function post(string $url, $callback)
    {
        $this->routes['post'][$url] = $callback;
    }
}
