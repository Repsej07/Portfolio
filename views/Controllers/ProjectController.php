<?php

class ProjectController
{

    public static function redirect($path = 'Project') {
        // $path_info = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : '';
     require './views/' . $path . '.view.php'; 
    }
}