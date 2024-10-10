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