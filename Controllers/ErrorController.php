<?php
/**
 * ErrorController class
 * Handles the error pages for the application
 */
class ErrorController
{
    /**
     * Index method
     * Loads the error view
     */
    public static function index(){
        require_once("./views/error.view.php");
    }
}