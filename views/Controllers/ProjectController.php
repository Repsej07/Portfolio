<?php

class ProjectController extends BaseController
{
    public static function redirect($path = 'Project')
    {  
        $controller = new self();
        $path_info = $controller->obtainmeth();

        $loser1 = $controller->projectchoice($path_info);
        if ($loser1 == "Error") {
            $path = 'error';
        } 
        require './views/' . $path . '.view.php';
        return $loser1;
        
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

    public function projectchoice($path_info)
    {
        switch ($path_info) {
            case '1':
                $loser1 = "Project 1 selected";
                break;
            default:
                $loser1 = "Error";
                break;
        }
        return $loser1;
    }
}