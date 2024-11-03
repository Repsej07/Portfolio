<?php
class LoginController
{

    public static function index()
    {
        var_dump($_SERVER["REQUEST_METHOD"]);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        self::loginsystem();
        }else{
        require './views/login.view.php';
        }
    }
    public static function  loginsystem()
    {
        include "./Controllers/db_conn.php";
            function validate($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $uname = validate($_POST['uname']);
            $pass = validate($_POST['password']);
            // Assuming you already have a PDO connection established as $pdo
            try {
                // Prepare the SQL statement with placeholders
                $sql = "SELECT * FROM users WHERE user_name = '$uname' AND password = '$pass'";
                $stmt = $pdo->prepare($sql);
                // Bind parameters
                // Execute the statement
                var_dump( $stmt);
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
                        echo "Login successful!";
                        echo $_SESSION['user_name'];
                        header("location: /admin");
                        exit();
                    } 
                }else {
                    // Invalid user credentials
                    echo "Invalid username or password.";
                }
            } catch (PDOException $e) {
                // Handle error (e.g., log it, show a message, etc.)
                echo "Error: " . $e->getMessage();
            }
        } 
}
