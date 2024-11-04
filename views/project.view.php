<?php
ob_start();
include("views/inserts/Header.php");
?>


<head>
    <title>Project</title>
</head>
<div class="project-main-container">  
<img class="project-sub-image" src="<?=$content_array[0][0]['sub_image']?>">
<?php
if (!empty($content_array[0][0]['main_image'])) {
    echo "<img class='project-main-image' src='".$content_array[0][0]['main_image']."'>";
}
?>
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
ob_end_flush();
?>
</html>
