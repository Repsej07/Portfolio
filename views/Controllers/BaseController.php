<?php
class BaseController
{

    public static function redirect($path = 'Home')
    {

       if ($path_info = isset($_SERVER['QUERY_STRING'])) {
            $path_info = $_SERVER['QUERY_STRING'];
        } else {
            $path_info = '';
        }
        $GLOBALS['path_info'] = $path_info;
        require_once './views/controllers/'.$path.'Controller.php';
    }
}
