<?php
class BaseController
{

    public static function redirect($path = 'Home')
    {
        require_once './views/controllers/'.$path.'php';
    }
}
