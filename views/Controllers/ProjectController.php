<?php

class ProjectController extends BaseController
{
    public static function redirect($path = 'Project')
    {  
        $controller = new self();
        $path_info = $controller->obtainmeth();
        $loser1 = $controller->projectchoice($path_info);
        $sub_image = $controller->projectchoice($path_info);

        if ($loser1 == "Error") {
            $path = 'error';
        } 
        require './views/' . $path . '.view.php';
        return $sub_image;

        
    }

    public function obtainmeth()
    {
        if (isset($_SERVER['QUERY_STRING'])) {
            $path_info = $_SERVER['QUERY_STRING'];
        } //else {
        //     $path = 'error';
        //     exit;
        // }
        if (isset($path_info)) {
            return $path_info;
        }
   
    }

    public static function project1()
    {
        $sub_image = "views/assets/Project-assets/Main-photo-Mediamarkt.png";
        return $sub_image;
    }
    public function projectchoice($path_info)
    {
        switch ($path_info) {
            case '1':
                self::project1();
                break;
            default:
                $loser1 = "Error";
                break;
        }
        return $loser1;
    }
    
}