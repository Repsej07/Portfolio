<?php
class BaseController
{
    public static function redirect($path = 'home', $content_array = [])
    {
        $content_array = $content_array;
        require_once "views/$path.view.php";
    }
}
