<?php
class ContactController
{


    public static function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Please fill in a valid name";
                require './views/contact.view.php';

              } else {
                self::handleFormSubmission();
              }
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
       
        $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');
        $stmt = $db->prepare("INSERT INTO contact_form (name, email, message) VALUES (:name, :mail, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':message', $message);
        $stmt->execute();
        $thankYou =  "Thank you for Your contact Subbmission, i will be in touch with you as soon as possible";
        require './views/contact.view.php';
        return $thankYou;

    }

}
