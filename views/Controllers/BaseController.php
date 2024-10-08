<?php

class BaseController
{
    public function index($destination)
    {
        include("/views/$destination.view.php");
    }
    
}
