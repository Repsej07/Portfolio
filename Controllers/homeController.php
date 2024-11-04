<?php
class HomeController
{

    public static function index()
    {
        session_start();
        session_destroy();
        try {
            $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');
            $stmt = $db->prepare("SELECT p.name AS page_name, c.home_image AS home_image, c.title AS title, c.blocks AS blocks,
            c.skills AS skills, c.title_line AS title_line
            FROM pages p
            JOIN content c ON p.id = c.page_id
            WHERE p.name = 'home'");
            $stmt->execute();
            $content_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
            require './views/Home.view.php';
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}



  




// SELECT p.name AS page_name, c.home_image AS home_image, c.title AS title, c.blocks AS blocks,
// c.skills AS skills
// FROM pages p
// JOIN content c ON p.id = c.page_id
// WHERE p.name = 'home'
// i prepared this querry according to the same logic i applied at the project controller(see comments in the project controller)
// the skills and the blocks still need to be exploded into a array, $blocks||$skills = explode('|', ($db output));
//the rest of the items are just strings so they can be used as is