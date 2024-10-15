<?php

class ProjectController extends BaseController
{

    public static function redirect($args = null, $path = 'project')
    {
        $args = $args ?? 'error';
        $controller = new self();
        $project_assets = $controller->projectchoice($args);
        if ($project_assets === null) {
            $path = 'error'; 
        }
        require './views/' . $path . '.view.php';
        return $project_assets;
    }

    public static function Sony()
    {
        $content1_querry = '';
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

    public static function projectchoice($args)
    {
        switch ($args[0]) {
            case 'sony'||'Sony':
                return self::Sony();
            default:
                return null;
        }
    }
}