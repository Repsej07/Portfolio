<?php

class ProjectController extends BaseController
{
    public static function redirect($path = 'Project')
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
    }

    public static function project1()
    {
        $sub_image = "views/assets/Jesper/blocks/Project.1/project.1.sub-image.sony.svg";
        $main_pr_image = "views/assets/Jesper/blocks/Project.1/Project.1.main.image.png";
        $title_project = "My role in Sony";
        $content1_project = "At Sony Benelux i am a Shop in Shop manager, i am fully responsible
        for the sales and the stock inside my store, I have worked in 4
        different stores since march 2024. I make sure that the store 
        employees have all the information they need to sell  my products.
        These products can range from small bluetooth speakers 
        all the way to enormous televisions. ";
        $sub_header_project_1 = "";
        $content2_project = "";
        $sub_header_project_2 = "";
        $content3_project = "";
        $sub_header_project_3 = "";
        $content4_project = "";
        return [$sub_image, $main_pr_image, $title_project, $content1_project, $sub_header_project_1, $content2_project, $sub_header_project_2, $content3_project, $sub_header_project_3, $content4_project];
    }
    public function projectchoice($path_info)
    {
        $loser1 = "";
        switch ($path_info) {
            case '1':
                $project_assets = self::project1();
                return $project_assets;
            default:
                $loser1 = "Error";
                break;
        }
        return $loser1;
    }
}
