<?php

namespace App;

use App\Router;
use App\Request;

class Application
{
    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function run()
    {
        $url = Request::getPath();
        $this->router->dispatch($url);
    }
}
