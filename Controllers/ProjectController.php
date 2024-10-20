<?php

class ProjectController extends BaseController
{
    public static function sony()
    {
        self::redirect_content('sony');
    }
    public static function mediamarkt()
    {
        self::redirect_content('mediamarkt');
    }
    public static function development(){
        self::redirect_content('development');
    }
    public static function media(){
        self::redirect_content('media');

    }
    public static function redirect_content($method)
    {
        $content_array[] = self::get_content($method);
        parent::redirect('project', $content_array);
    }

    public static function get_content($method)
    {
        try {
            $db = new PDO("mysql:host=localhost;dbname=test", 'root', 'Hi123');
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


//insert function (not used rn in this code but is used in the db)
//INSERT INTO articles (project_id, header, content) 
//VALUES
//(1, 'The challenges', 'In my Field of work there are a lot of different challenges),


