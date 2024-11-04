<?php
class ErrorController
{
public static function redirect($path = 'Error', $args = null)
{
require './views/' . $path . '.view.php';
}
}