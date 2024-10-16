<?php
class ContactController extends BaseController
{
    public static function redirect($path = 'Contact', $args = null)
    {
        require './views/' . $path . '.view.php';
    }
}