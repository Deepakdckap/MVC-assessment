<?php

require 'UserControllers/UserController.php';
class Router
{
    public $routes = array();
    public $controller;

    public function __construct()
    {
        $this->controller = new UserController();
    }

    public function get($uri,$action)
    {
        $this->routes[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET'
        ];
    }

    public function post($uri,$action)
    {
        $this->routes[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function put($uri,$action)
    {
        $this->routes[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function delete($uri,$action)
    {
        $this->routes[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function handle()
    {
        foreach ($this->routes as $route)
        {
            if ($route['uri'] === $_SERVER['REQUEST_URI'])
            {
                $action = $route['action'];

                switch ($action)
                {
                    case 'create':
                        $this->controller->create($_POST,$_FILES['productImage']);
                            break;
                    case 'lists':
                        $this->controller->lists();
                        break;
                    case 'edit':
                        $this->controller->edit($_POST['edit']);
                        break;
                    case 'update':
                        $this->controller->update($_POST,$_FILES['productImage']);
                        break;
                    case 'delete':
                        $this->controller->delete($_POST['delete']);
                        break;
                    default:
                        $this->controller->index();
                }
            }
        }
    }
}