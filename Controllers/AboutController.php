<?php

class AboutController
{
    // Method to handle the index action
    public static function index()
    {
        // Start the session
        session_start();
        
        // Destroy the session
        session_destroy();
        
        try {
            // Create a new PDO instance to connect to the database
            $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');
            
            // Prepare the SQL statement to fetch content for the 'about_me' page
            $stmt = $db->prepare("SELECT about_me AS about_me, title AS title, home_image AS home_image, title_line AS title_line
            FROM pages p
            JOIN content c ON p.id = c.page_id
            WHERE p.name = 'about_me'");
            
            // Execute the SQL statement
            $stmt->execute();
            
            // Fetch all results as an associative array
            $content_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Include the view file to display the content
            require './views/about.view.php';
        } catch (PDOException $e) {
            // Display an error message if the connection fails
            echo "Connection failed: " . $e->getMessage();
        }
    }
}