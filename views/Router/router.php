<?php
include './views/controllers/BaseController.php';
include './views/controllers/ProjectController.php';
include './views/controllers/ContactController.php';
include './views/controllers/AboutController.php';
include './views/Controllers/HomeController.php';
include './views/Controllers/ErrorController.php';

//BEDANKT FLORIS VOOR HULP MET DE ROUTER
class Router
{
    public static function content() : void
    {   
        $uri = self::processUri(); 
        $class = explode('/', $uri['controller']);
        if (class_exists($class[2])) {
            $controller = $class[2];
            $method = $uri['method'];
            $args = $uri['args'];
            $args ? $controller::{$method}($args) : $controller::{$method}();
        } else {
            ErrorController::redirect('error');
        }
    }

    private static function getUri(): array
    {
        $path_info = $_SERVER['PATH_INFO'] ?? '/';
        return explode('/', $path_info);
    }

    private static function processUri(): array
    {
        $uriData = self::getUri();
        $cntrluri = $uriData[1] ?? '';
        $controller = !empty($cntrluri) ?
            './controllers/' . ucfirst($cntrluri) . 'Controller' :
            './controllers/BaseController';
        $method = 'redirect';
        $args = !empty($uriData[2]) ? $uriData[2] : "home";

        return [
            'controller' => $controller,
            'method' => $method,
            'args' => $args
        ];
    }
}