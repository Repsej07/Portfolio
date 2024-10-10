<?php

class ProjectController
{
    public function __construct() {
        $path_info = $this->getArguments(); // Initialize path_info from arguments
    }

    public static function  redirect($path = 'Project') {
        // Prepare the data to pass to the view       
        // Pass data to the view
     require './views/' . $path . '.view.php'; // Include the view file
    }

    private function getArguments() {
        return $_SERVER['QUERY_STRING'] ?? '/'; // Get the path info from the server variable
    }
}
//we receive a querry string, and we need to extract the "chosen project" for example sony is 1
//we then need to pass the project to the view with data from the db