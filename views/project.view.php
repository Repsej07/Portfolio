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
    echo "<input type='text' class='header-project' value =" . "$content[article_header]". ">";
    echo "<div class='article-project'>" . htmlspecialchars($content['article_content']) . "</div>";
    echo "</form>";
}
?>
<?php
include("views/inserts/Footer.php");
?>
</html>