<?php
include("views/inserts/Header.php");

$sub_image = "views/assets/project-sub-image.svg";
$loser1 = isset($loser1) ? $loser1 : "No project selected";
?>


<head>
    <title>Project</title>
</head>
<div class="project-main-container">
     <img class="project-sub-image" src="<?= $sub_image?>" alt=""> 
     <h1><?php echo htmlspecialchars($loser1); ?></h1>
</div>

</html>