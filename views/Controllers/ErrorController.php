<?php
class ErrorController extends BaseController
{
public static function redirect($path = 'Error')
{
require './views/' . $path . '.view.php';
}
}