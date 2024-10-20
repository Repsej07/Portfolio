<?php
class HomeController extends BaseController
{
    

    public static function get_content()
    {
        try {
            $db = new PDO("mysql:host=localhost;dbname=Portfolio", 'root', 'Hi123');
            $stmt = $db->prepare("SELECT p.name AS page_name, c.home_image AS home_image, c.title AS title, c.blocks AS blocks,
            c.skills AS skills
            FROM pages p
            JOIN content c ON p.id = c.page_id
            WHERE p.name = 'home'
            ");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            print_r($result);
            return $result;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        
    }
}
HomeController::get_content();

    // $home_image = "views/assets/Jesper/Home.main.image.png";
    // $title = "Home";

    //blocks = [
    // $Block_1 = "views/assets/Jesper/blocks/Project.1.block.png";
    // $Block_2 = "views/assets/Jesper/blocks/Project.2.block.png";
    // $Block_3 = "views/assets/Jesper/blocks/Project.3.block.png";
    // $Block_4 = "views/assets/Jesper/blocks/Project.4.block.png";
    // $Block_5 = "views/assets/Contact-block.svg";]


// skills= [
// $Skill_1 = "HTML5";
// $Skill_2 = "CSS";
// $Skill_3 = "JavaScript";
// $Skill_4 = "PHP";
// $Skill_5 = "Adobe";
// $Skill_6 = "Retail";
// $Skill_7 = "MySQL";]

// SELECT p.name AS page_name, c.home_image AS home_image, c.title AS title, c.blocks AS blocks,
// c.skills AS skills
// FROM pages p
// JOIN content c ON p.id = c.page_id
// WHERE p.name = 'home'
// i prepared this querry according to the same logic i applied at the project controller(see comments in the project controller)
// the skills and the blocks still need to be exploded into a assoc array, $blocks||$skills = explode('|', ($db output));
//the rest of the items are just strings so they can be used as is