<?php

namespace Web\Blog\Core\Classes;

class Router
{
    protected string $uri;
    protected string $method;
    protected array $routers = [];

    public function __construct()
    {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function addRouter(string $uri, string $controller, string ...$method)
    {
        $method = array_map('strtoupper', $method);

        $this->routers[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function match()
    {
        $matches = false;
        foreach ($this->routers as $router) {
            if ($router['uri'] === $this->uri && in_array($this->method, $router['method'])) {
                if (file_exists(DIR_CONTROLLERS . "/{$router['controller']}")) {
                    $matches = true;
                    require_once DIR_CONTROLLERS . "/{$router['controller']}";
                } else {
                    showError();
                }
            }
        }

        if (!$matches) {
            showError();
        }

    }

}