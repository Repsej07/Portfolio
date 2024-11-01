<?php
class ContactController
{


    public static function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            self::handleFormSubmission();
        } else {
            // Load the contact form view
            require './views/contact.view.php';
        }
        
    }
   public static function  handleFormSubmission()
    {
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $message = $_POST['message'];
       
    $data = [
        'name' => $name,
        'mail' => $mail,
        'message' => $message
    ];
    var_dump($data);
    }

}