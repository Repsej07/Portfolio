<?php
class BaseController
{
    public static function redirect($path = 'home', $content_array = [])
    {
        include "views/$path.view.php";
        // return $content_array;
    }
}
