<?php

final class AdminController
{
   static public function index(){
        require_once("./views/admin.view.php");


    }

    static public function project_1(){
        $content_array [] = self::db_projects("1");
        require_once("./views/project.admin.view.php");
    }
    static public function db_projects($method){
        try {
            $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');
            $stmt = $db->prepare("SELECT main_image, sub_image,  p.name AS project_name, a.header AS article_header, a.content AS article_content
            FROM projects p
            JOIN articles a ON p.id = a.project_id
            WHERE p.id = :id");
            $stmt->bindParam(':id', $method);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
    public static function Project_adjustments()
    {
        $id = 1;
        $name = "test";
        $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');
        $stmt = $db->prepare("UPDATE projects SET name = :name, main_image = :main_image, sub_image = :sub_image WHERE id = :id");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':main_image', $_POST['main_image']);
        $stmt->bindParam(':sub_image', $_POST['sub_image']);
        $id = '1';
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        header("location: /admin");
    }
}
/*
            SELECT main_image, sub_image,  p.name AS project_name, a.header AS article_header, a.content AS article_content
            FROM projects p
            JOIN articles a ON p.id = a.project_id
            WHERE p.name = :method;"

            SELECT p.name AS page_name, c.home_image AS home_image, c.title AS title, c.blocks AS blocks,
            c.skills AS skills, c.title_line AS title_line
            FROM pages p
            JOIN content c ON p.id = c.page_id
            WHERE p.name = 'home'"
            */