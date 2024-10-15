<?php

class ProjectController extends BaseController
{
    
    public static function redirect($path = 'Project', ...$args)
    {   
        $controller = new self();
        $path_info = $controller->obtainmeth();
        $loser1 = $controller->projectchoice($path_info);
        $project_assets = $controller->projectchoice($path_info);
        if ($loser1 == "Error") {
            $path = 'error';
        }
        require './views/' . $path . '.view.php';
        return $project_assets;
    }
    
    

    public function obtainmeth()
    {
        if (isset($_SERVER['QUERY_STRING'])) {
            $path_info = $_SERVER['QUERY_STRING'];
        }
        if (isset($path_info)) {
            return $path_info;
        }
        $args = [];
        var_dump($args);
    }

    public static function project1()
    {
        $content1_querry='';
        $sub_image = "views/assets/Jesper/blocks/Project.1/project.1.sub-image.sony.svg";
        $main_pr_image = "views/assets/Jesper/blocks/Project.1/Project.1.main.image.png";
        $title_project = "My role in Sony";
        $content1_project = $content1_querry;
        $sub_header_project_1 = "";
        $content2_project = "";
        $sub_header_project_2 = "";
        $content3_project = "";
        $sub_header_project_3 = "";
        $content4_project = "";
        //database variables 
        return [$sub_image, $main_pr_image, $title_project, $content1_project, $sub_header_project_1, $content2_project, $sub_header_project_2, $content3_project, $sub_header_project_3, $content4_project];
    }
    public function projectchoice($path_info)
    {
        $loser1 = "";
        switch ($path_info) {
            case 'sony':
                $project_assets = self::project1();
                return $project_assets;
            default:
                $loser1 = "Error";
                break;
        }
        return $loser1;
    }
}
