<?php

class AboutController extends BaseController
{
    public static function redirect($path = 'About', $args = null)
    {
        require './views/' . $path . '.view.php';
    }
}