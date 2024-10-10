<?php
class HomeController extends BaseController{
    public static function redirect($path = 'Home') {
        require './views/' . $path . '.view.php'; 
       }
}
