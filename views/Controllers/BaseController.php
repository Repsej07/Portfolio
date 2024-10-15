<?php
class BaseController
{

    public static function redirect($args, $path = 'home')
    {

        require_once './views/controllers/'.$path.'php';
    }
}
