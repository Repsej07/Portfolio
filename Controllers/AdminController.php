/**
 * Class AdminController
 * 
 * This class handles the administrative functions of the application.
 <?php
class AdminController
{
    /**
     * Displays the admin view.
     * 
     * This static method includes the admin view file to render the admin interface.
     */
    static function index(){
        include("./views/admin.view.php");
    }
}

