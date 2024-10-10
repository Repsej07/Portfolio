<?php
include("views/inserts/Header.php");

$sub_image = "views/assets/project-sub-image.svg";
$path_info = isset($path_info) ? $path_info : '';

?>


<head>
    <title>Project</title>
</head>
<div class="project-main-container">
     <img class="project-sub-image" src="<?= $sub_image?>" alt=""> 
     <h1><?php echo htmlspecialchars($path_info); ?></h1>
</div>

</html>