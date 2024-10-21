<?php

class AboutController
{
    public static function redirect($path = 'About', $args = null)
    {
        require './views/' . $path . '.view.php';
    }
}