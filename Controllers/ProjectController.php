<?php

class ProjectController
{
    // Method to get content for Sony project
    public static function sony()
    {
        self::get_content('sony');
    }

    // Method to get content for MediaMarkt project
    public static function mediamarkt()
    {
        self::get_content('mediamarkt');
    }

    // Method to get content for Code project
    public static function code(){
        self::get_content('code');
    }

    // Method to get content for BMD project
    public static function bmd(){
        self::get_content('bmd');
    }

    // Method to get content based on the project name
    public static function get_content($method)
    {
        // Fetch content from the database
        $content_array[] = self::db_content($method);
        // Include the view to display the content
        include "views/project.view.php";
    }

    // Method to fetch content from the database
    public static function db_content($method)
    {
        try {
            // Create a new PDO instance to connect to the database
            $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');
            // Prepare the SQL statement to fetch project and article details
            $stmt = $db->prepare("SELECT main_image, sub_image, p.name AS project_name, a.header AS article_header, a.content AS article_content
            FROM projects p
            JOIN articles a ON p.id = a.project_id
            WHERE p.name = :method;");
            // Bind the project name to the SQL statement
            $stmt->bindParam(':method', $method);
            // Execute the SQL statement
            $stmt->execute();
            // Fetch all results as an associative array
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // Display error message if connection fails
            echo "Connection failed: " . $e->getMessage();
        }
    }
}



// SELECT p.name AS project_name, a.header AS article_header, a.content AS article_content     select the name of the project and the header and content of the article and create a alias
// FROM projects p     from where to select
// JOIN articles a ON p.id = a.project_id     inner join the articles with the projects where the id of the project is equal to the project_id of the article
// WHERE p.name = :method;"    where the name of the project is equal to the method


//insert function (not used rn in this code but is used in the db)
//INSERT INTO articles (project_id, header, content) 
//VALUES
//(1, 'The challenges', 'In my Field of work there are a lot of different challenges),


