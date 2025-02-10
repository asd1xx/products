<?php

namespace App;

use App\Router;

class Application
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run(): void
    {
        $this->router->dispatch();
    }
}
