<?php

namespace Htanguy;

use AltoRouter;

class Router {

    private $router;
    
    private $view_path;

    public function __construct($view_path)
    {
        $this->view_path = $view_path;
        $this->router = New AltoRouter();
    }

    public function get(string $slug, string $path, ?string $name = null): self
    {
        
        $this->router->map('GET', $slug, $path, $name);
        return $this;
    }

    public function url(string $name, array $params = []): string
    {
        return $this->router->generate($name, $params);
    }

    public function run()
    {
        $match = $this->router->match();
        $view = $match['target'];
        $router = $this;
        ob_start();
        require $this->view_path . DIRECTORY_SEPARATOR . $view . '.php';
        $content = ob_get_clean();
        require $this->view_path . DIRECTORY_SEPARATOR . 'layouts/default.php';
        return $this;
    }

}