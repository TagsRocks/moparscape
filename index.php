<?php

class Index
{
    private $router;

    public function __construct()
    {
        $this->prepareEnvironment(); // this must be called first - IMPORTANT
        $this->router = new \Phroute\Phroute\RouteCollector();
        $this->routes();
        $this->dispatch();
    }

    private function prepareEnvironment()
    {
        require_once "vendor/autoload.php";
        session_start();
    }

    private function routes()
    {
        $routes = [
            "/" => "Index",
            "/login" => "Login"
        ];

        foreach($routes as $key => $route)
        {
            $this->router->controller($key, "Web\\Module\\$route\\Controller\\$route");
        }
    }

    private function dispatch()
    {
        $dispatcher = new \Phroute\Phroute\Dispatcher($this->router->getData());

        /* try to execute the requested controller action, if the action cannot be found
         * then handle this in the exception
         *
         * example, a POST http request with route /login/register would call the
         * postRegister method in the Login Controller
         */

        try {
            $dispatcher->dispatch(
                $_SERVER['REQUEST_METHOD'],
                $_SERVER['REQUEST_URI']
            );
        } catch(\Exception $e) {
            $this->routeNotFound();
        }
    }

    private function routeNotFound()
    {
        echo "route not found";

        /* finish this later, needs a 404 page */
    }
}

new Index();