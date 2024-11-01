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
       
        $db = new PDO("mysql:host=localhost;dbname=Portfolio", 'root', 'Hi123');
        $stmt = $db->prepare("INSERT INTO contact_form (name, email, message) VALUES (:name, :mail, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
        require './views/contact.view.php';

    }

}