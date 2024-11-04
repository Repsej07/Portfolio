<?php 
// Include the header file
require_once 'views/inserts/Header.php';
?>
<head>
    <title><?= $content_array[0]['title'] ?></title>
</head>
<html>
<div class="main-about-container">
    <!-- Display the title -->
    <h1 class="about-title"><?= $content_array[0]['title_line'] ?></h1>
    
    <!-- Display the main image -->
    <img class="about-main-image" src="<?=$content_array[0]['home_image']?>" alt="">
    
    <!-- Display the about me content -->
    <div class="about-me-content"><?=$content_array[0]['about_me']?></div>
</div>
</html>
<?php
// Include the footer file
require_once 'views/inserts/Footer.php';
?>