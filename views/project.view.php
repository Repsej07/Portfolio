<?php
include("views/inserts/Header.php");

?>


<head>
    <title>Project</title>
</head>
<div class="project-main-container">
    <img class="project-sub-image" src="<?= htmlspecialchars($content_array[0]) ?>" alt="Sub-image">
    <img class="project-main-image" src="<?= htmlspecialchars($content_array[1]) ?>" alt="Main-image">
    <div class="header-project"><?= htmlspecialchars($content_array[2]) ?></div>
    <div class="article-project"><?= htmlspecialchars($content_array[3]) ?></div>
    <div class="header-project"><?= htmlspecialchars($content_array[4]) ?></div>
    <div class="article-project"><?= htmlspecialchars($content_array[5]) ?></div>
    <div class="header-project"><?= htmlspecialchars($content_array[6]) ?></div>
    <div class="article-project"><?= htmlspecialchars($content_array[7]) ?></div>
    <div class="header-project"><?= htmlspecialchars($content_array[8]) ?></div>
    <div class="article-project"> <?= htmlspecialchars($content_array[9]) ?></div>
    
</div>
<?php
include("views/inserts/Footer.php");
?>
</html>