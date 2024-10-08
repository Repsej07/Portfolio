<?php

class controller
{
    public function index($destination)
    {
        include("/views/$destination.view.php");
    }
    
}
