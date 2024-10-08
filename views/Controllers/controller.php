<?php

class controller
{
    public function index($destination)
    {
        header("Location: /views/$destination.view.php");
    }
    
}
