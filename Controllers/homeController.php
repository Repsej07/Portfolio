<?php
class HomeController extends BaseController
{

    public static function get_content()
    {
        try {
            $db = new PDO("mysql:host=localhost;dbname=Portfolio", 'root', 'Hi123');
            $stmt = $db->prepare("");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
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