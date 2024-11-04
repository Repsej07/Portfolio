<?php 
require_once 'views/inserts/Header.php';
?>
<head>
<title><?= $content_array[0]['title'] ?></title>

</head>
<html>
<img src="<?=$content_array[0]['home_image']?>" alt="">
<h1 class="title"><?= $content_array[0]['title_line'] ?></h1>
<div><?=$content_array[0]['about_me']?></div>

</html>
<?php
require_once 'views/inserts/Footer.php';
?>