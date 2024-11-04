<?php
class ContactController
{
    // Main method to handle the contact form
    public static function index()
    {
        // Check if the request method is POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            // Validate the name input
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Please fill in a valid name";
                // Load the contact form view with error message
                require './views/contact.view.php';
            } else {
                // Handle the form submission
                self::handleFormSubmission();
            }
        } else {
            // Load the contact form view
            require './views/contact.view.php';
        }
    }

    // Method to handle form submission
    public static function handleFormSubmission()
    {
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $message = $_POST['message'];
       
        // Connect to the database
        $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');
        // Prepare the SQL statement
        $stmt = $db->prepare("INSERT INTO contact_form (name, email, message) VALUES (:name, :mail, :message)");
        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':mail', $mail);
        $stmt->bindParam(':message', $message);
        // Execute the statement
        $stmt->execute();
        // Thank you message
        $thankYou =  "Thank you for Your contact Subbmission, i will be in touch with you as soon as possible";
        // Load the contact form view with thank you message
        require './views/contact.view.php';
        return $thankYou;
    }
}

