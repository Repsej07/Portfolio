<?php
// Start output buffering
ob_start();

// Include the header file
include("views/inserts/Header.php");
?>

<head>
    <title>Project</title>
</head>

<div class="project-main-container">  
    <!-- Display the sub image -->
    <img class="project-sub-image" src="<?=$content_array[0][0]['sub_image']?>">

    <?php
    // Check if there is a main image and display it
    if (!empty($content_array[0][0]['main_image'])) {
        echo "<img class='project-main-image' src='".$content_array[0][0]['main_image']."'>";
    }
    ?>

    <?php
    // Loop through the content array and display each article
    foreach ($content_array[0] as $content) {
        echo "<form class='article-project'>";
        echo "<div type='text' class='header-project'>".$content['article_header']."</div>";
        echo "<div class='article-project'>".$content['article_content']."</div>";
        echo "</form>";
    }
    ?>
</div>

<?php
// Include the footer file
include("views/inserts/Footer.php");

// End output buffering and flush the output
ob_end_flush();
?>
</html>
