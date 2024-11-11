<?php

class ProjectController
{
    public static function sony()
    {
        self::get_content('sony');
    }
    public static function mediamarkt()
    {
        self::get_content('mediamarkt');
    }
    public static function code(){
        self::get_content('code');
    }
    public static function bmd(){
        self::get_content('bmd');

    }
    public static function get_content($method)
    {
        $content_array[] = self::db_content($method);
        include "views/project.view.php";
    }

    public static function db_content($method)
    {
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



// SELECT p.name AS project_name, a.header AS article_header, a.content AS article_content     select the name of the project and the header and content of the article and create a alias
// FROM projects p     from where to select
// JOIN articles a ON p.id = a.project_id     inner join the articles with the projects where the id of the project is equal to the project_id of the article
// WHERE p.name = :method;"    where the name of the project is equal to the method




