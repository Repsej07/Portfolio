<?php
class BaseController
{
    public static function redirect($path = 'Home')
    {
        require "./views/$path.view.php";
    }
}