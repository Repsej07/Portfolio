<?php
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
            // $args = $uri['args'];
            if (method_exists($controller, $method)) { 
                    $controller::$method();
                    // $controller::get_content($method); i dont remember why this is here but it is not neccesary
                    // trying to figure out how to give the method as a string to the controller
                    // $controller::$method($args); If statement for when there are arguments rn not necessary
            } else {
                ErrorController::redirect('error');
            }
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
        $cntrluri = self::getUri()[1] ?? '';
        $controller = !empty($cntrluri) ?
            './Controllers/' . ucfirst($cntrluri) . 'Controller' :
            './controllers/HomeController';
        $method = !empty(self::getUri()[2]) ? self::getUri()[2] : 'get_content'; 
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
