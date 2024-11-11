<?php
class LoginController
{

    public static function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            self::loginsystem();
        } else {
            require './views/login.view.php';
        }
    }
    public static function  loginsystem()
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $uname = validate($_POST['uname']);
        $pass = validate($_POST['password']);
        try {
            $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');
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
                    header( "location: /admin");
                    exit();
                }
            } else {
                $error = "Invalid username or password";
                include './views/login.view.php';                
                }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
//https://youtu.be/JDn6OAMnJwQ?si=9hgyBUJQqqgthHoa -credits to this video for the login system