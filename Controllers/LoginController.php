<?php
class LoginController
{
    // Main method to handle login requests
    public static function index()
    {
        // Check if the request method is POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Call the login system method
            self::loginsystem();
        } else {
            // Load the login view
            require './views/login.view.php';
        }
    }

    // Method to handle the login system
    public static function loginsystem()
    {
        // Function to validate input data
        function validate($data)
        {
            $data = trim($data); // Remove whitespace from both sides
            $data = stripslashes($data); // Remove backslashes
            $data = htmlspecialchars($data); // Convert special characters to HTML entities
            return $data;
        }

        // Validate username and password from POST request
        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);

        try {
            // Connect to the database
            $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');

            // Prepare SQL query to check user credentials
            $sql = "SELECT * FROM users WHERE user_name = '$uname' AND password = '$pass'";
            $stmt = $db->prepare($sql);
            $stmt->execute();

            // Check if a user was found
            if ($stmt->rowCount() === 1) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verify user credentials
                if ($row['user_name'] === $uname && $row['password'] === $pass) {
                    // Start the session and store user information
                    session_start();
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];

                    // Redirect to home page
                    header("location: /admin");
                    exit();
                }
            } else {
                // If credentials are invalid, show error message
                $error = "Invalid username or password";
                include './views/login.view.php';
            }
        } catch (PDOException $e) {
            // Handle database connection errors
            echo "Error: " . $e->getMessage();
        }
    }
}
//https://youtu.be/JDn6OAMnJwQ?si=9hgyBUJQqqgthHoa -credits to this video for the login system