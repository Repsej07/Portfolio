<?php

class ProjectController extends BaseController
{
    public static function redirect($path = 'Project')
    {  
        $controller = new self();
        $path_info = $controller->obtainmeth();
        $loser1 = $controller->projectchoice($path_info);
        // $path = $controller->obtainmeth($path);
        echo $path;
        require './views/' . $path . '.view.php';
        return $loser1;
        
    }

    public function obtainmeth()
    {
        if (isset($_SERVER['QUERY_STRING'])) {
            $path_info = $_SERVER['QUERY_STRING'];
        } else {
            $this->redirect('Error');
            return;
        }
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
                $loser1 = "No project selected";
                break;
        }
        return $loser1;
    }
}