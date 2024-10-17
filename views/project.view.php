<?php
include("views/inserts/Header.php");

?>


<head>
    <title>Project</title>
</head>
<div class="project-main-container">
    
<img class="project-sub-image" src="<?=$content_array[0][0]['sub_image']?>">
<img class="project-main-image" src="<?=$content_array[0][0]['main_image']?>"> 
<?php
   foreach ($content_array[0] as $content) {
    echo "<form class='article-project'>";
    echo "<div type='text' class='header-project'>".$content['article_header']."</div>";
    echo "<div class='article-project'>".$content['article_content']."</div>";
    echo "</form>";
}
?>
<?php
include("views/inserts/Footer.php");
?>
</html>

<?php
//example of what to load when there is a admin, makes the project editable
//foreach ($content_array[0] as $content) {
   // echo "<form class='article-project'>";
    //echo "<input type='text' class='header-project'". "value = '$content[article_header]'". ">";
    //echo "<textarea class='article-project' style='width:100%;' rows='12'>".$content['article_content']."</textarea>";
    //echo "</form>";
//}