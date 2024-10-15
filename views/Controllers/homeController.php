<?php
class HomeController extends BaseController{
    public static function redirect($path = 'Home', $args = null) {
        require './views/' . $path . '.view.php'; 
       }
}
