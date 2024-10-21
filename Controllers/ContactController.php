<?php
class ContactController
{
    public static function redirect($path = 'Contact', $args = null)
    {
        require './views/' . $path . '.view.php';
    }
}