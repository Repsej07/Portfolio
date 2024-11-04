<?php
class HomeController
{
    // The index method is the default method that will be called when the home page is accessed
    public static function index()
    {
        // Start a new session or resume the existing session
        session_start();
        
        // Destroy the current session
        session_destroy();
        
        try {
            // Create a new PDO instance to connect to the database
            $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');
            
            // Prepare the SQL query to fetch the home page content
            $stmt = $db->prepare("SELECT p.name AS page_name, c.home_image AS home_image, c.title AS title, c.blocks AS blocks,
            c.skills AS skills, c.title_line AS title_line
            FROM pages p
            JOIN content c ON p.id = c.page_id
            WHERE p.name = 'home'");
            
            // Execute the query
            $stmt->execute();
            
            // Fetch all the results as an associative array
            $content_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Include the view file to display the home page content
            require './views/Home.view.php';
        } catch (PDOException $e) {
            // Display an error message if the connection fails
            echo "Connection failed: " . $e->getMessage();
        }
    }
}



  




