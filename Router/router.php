<?php
require_once 'Controllers/BaseController.php';
require_once 'Controllers/HomeController.php';
require_once 'Controllers/ErrorController.php';
require_once 'Controllers/AboutController.php';
require_once 'Controllers/ContactController.php';
require_once 'Controllers/ProjectController.php';

//BEDANKT FLORIS VOOR HULP MET DE ROUTER
class Router
{
    public static function content() : void
    {   
        $uri = self::processUri();
        $class = explode('/', $uri['controller']);
        // require_once $uri['controller'] . '.php';
        if (class_exists($class[2])) {
            $controller = $class[2];
            $method = $uri['method'];
            $args = $uri['args'];
            if (method_exists($controller, $method)) {
                if (!empty($args)) {
                    $controller::$method($args);  // Call the method with arguments
                } else {
                    $controller::$method();  // Call the method without arguments
                }
            } else {
                // If the method doesn't exist, redirect to error page
                ErrorController::redirect('error');
            }
        } else {
            require_once 'Controllers/ErrorController.php';
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
        $cntrluri = self::getUri()[1] ?? '';
        $controller = !empty($cntrluri) ?
            './Controllers/' . ucfirst($cntrluri) . 'Controller' :
            './controllers/HomeController';
        $method = !empty(self::getUri()[2]) ? self::getUri()[2] : 'redirect'; 
        // $num_args = count(self::getUri());
        // $argsParts = [];
        // for ($i = 2; $i < $num_args; $i++) {
        //     $argsParts[] = self::getUri()[$i];
        // }
        $args = !empty($argsParts) ?
        $argsParts :[];



        return [
            'controller' => $controller,
            'method' => $method,
            'args' => $args,
        ];
        
    }
}
