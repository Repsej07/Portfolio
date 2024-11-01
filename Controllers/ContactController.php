<?php
class ContactController
{


    public static function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            self::handleFormSubmission();
            $name = $_POST['name'];
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
                echo $nameErr;
                die();
              }
            $email = ($_POST["mail"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
              echo $emailErr;
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
       
        $db = new PDO("mysql:host=localhost;dbname=Portfolio", 'root', 'Hi123');
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
//imma try some form validation because it seems like the form wouldnt be done without it 
