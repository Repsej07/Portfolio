<?php
include("views/inserts/Header.php");


?>


<head>
    <title>Project</title>
</head>
<div class="project-main-container">
     <img class="project-sub-image" src="<?=htmlspecialchars($project_assets[0])?>" alt="Sub-image"> 
    <img class="project-main-image" src="<?=htmlspecialchars($project_assets[1])?>" alt="Main-image">
    <h1 class="project-title"><?=htmlspecialchars($project_assets[2])?></h1>
    <article>
    <?=htmlspecialchars($project_assets[3])?>
    </article>
    <h1><?=htmlspecialchars($project_assets[4])?></h1>
    <article>
    <?=htmlspecialchars($project_assets[5])?>
    </article>
    <h1><?=htmlspecialchars($project_assets[6])?></h1>
    <article>
    <?=htmlspecialchars($project_assets[7])?>
    </article>
    <h1><?=htmlspecialchars($project_assets[8])?></h1>
    <article>
    <?=htmlspecialchars($project_assets[9])?>
    </article>     

</div>

</html>