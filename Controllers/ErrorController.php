<?php
class ErrorController extends BaseController
{
public static function redirect($path = 'Error', $args = null)
{
require './views/' . $path . '.view.php';
}
}