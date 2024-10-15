<?php
include("views/inserts/Header.php");


?>


<head>
    <title>Project</title>
</head>
<div class="project-main-container">
    <img class="project-sub-image" src="<?= htmlspecialchars($project_assets[0]) ?>" alt="Sub-image">
    <img class="project-main-image" src="<?= htmlspecialchars($project_assets[1]) ?>" alt="Main-image">
    <div class="header-project"><?= htmlspecialchars($project_assets[2]) ?></div>
    <div class="article-project"><?= htmlspecialchars($project_assets[3]) ?></div>
    <div class="header-project"><?= htmlspecialchars($project_assets[4]) ?></div>
    <div class="article-project"><?= htmlspecialchars($project_assets[5]) ?></div>
    <div class="header-project"><?= htmlspecialchars($project_assets[6]) ?></div>
    <div class="article-project"><?= htmlspecialchars($project_assets[7]) ?></div>
    <div class="header-project"><?= htmlspecialchars($project_assets[8]) ?></div>
    <div class="article-project"> <?= htmlspecialchars($project_assets[9]) ?></div>

</div>
<?php
include("views/inserts/Footer.php");
?>
</html>