<?php

class AboutController
{
    public static function index()
    {
        session_start();
        session_destroy();
        try {
            $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');
            $stmt = $db->prepare("SELECT about_me AS about_me, title AS title, home_image AS home_image, title_line AS title_line
            FROM pages p
            JOIN content c ON p.id = c.page_id
            WHERE p.name = 'about_me'");
            $stmt->execute();
            $content_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
            require './views/about.view.php';
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}