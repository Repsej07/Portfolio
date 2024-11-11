<?php

final class AdminController
{
   static public function index(){
        require_once("./views/admin.view.php");


    }

    static public function project_1(){
        self::db_projects("sony");
        require_once("./views/project.admin.view.php");
    }
    static public function db_projects($method){
        try {
            $db = new PDO("mysql:host=localhost;dbname=jesper_portfolio", 'root', 'Hi123');
            $stmt = $db->prepare("SELECT main_image, sub_image,  p.name AS project_name, a.header AS article_header, a.content AS article_content
            FROM projects p
            JOIN articles a ON p.id = a.project_id
            WHERE p.name = :method;");
            $stmt->bindParam(':method', $method);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
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